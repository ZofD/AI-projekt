<?php
	session_start();

	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)){
		if($_SESSION['admin'] == 0){
			header('Location: user.php');
		}else{
			header('Location: admin.php');
		}
		exit();
	}

	/*
	$_SESSION['e_pesel']=FALSE;
	$_SESSION['e_email']=FALSE;
	$_SESSION['e_login']=FALSE;
	$_SESSION['e_npassword']=FALSE;
	$_SESSION['e_rep_password']=FALSE;
	$_SESSION['e_kod1']=FALSE;
	*/
	if (
        (isset($_POST['nameUser'])) && 
        (isset($_POST['surname'])) &&
        (isset($_POST['Pesel'])) &&
        (isset($_POST['email'])) &&
        (isset($_POST['login'])) &&
        (isset($_POST['npassword'])) &&
        (isset($_POST['rep_password'])) &&
        (isset($_POST['city'])) &&
        (isset($_POST['street'])) &&
        (isset($_POST['building'])) &&
        (isset($_POST['kod1'])) &&
		(isset($_POST['postoffice'])) 
    ){
		$wszystko_OK=true;

		//Sprawdź poprawność "peselu"
		$pesel = $_POST['Pesel'];
		
		//Sprawdzenie długości "peselu"
		if (strlen($pesel) != 11){
			$wszystko_OK=false;
			$_SESSION['e_pesel']="Nie poprawny PESEL.";
		}

		// Sprawdź poprawność adresu email
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email)){
			$wszystko_OK=false;
			$_SESSION['e_email']="Nie poprawny email.";
		}

		//Sprawdzenie długości nicka
		$nick = $_POST['login'];

		if (strlen($nick) < 3){
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nick ma niepoprawną długość.";
		}

		if (ctype_alnum($nick)==false){
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
		}

		//Sprawdź poprawność hasła
		$haslo1 = $_POST['npassword'];
		$haslo2 = $_POST['rep_password'];
		if ( strlen($haslo1) < 7 ){
			$wszystko_OK=false;
			$_SESSION['e_password']="Hasło ma niepoprawną długość.";
		}
		if ($haslo1!=$haslo2){
			$wszystko_OK=false;
			$_SESSION['e_rep_password']="Hasła nie są identyczne.";
		}
		unset($_POST['rep_password']);
		unset($_POST['npassword']);
		unset($haslo2);

		//Hashowanie hasla
		$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
		unset($haslo1);

		//Czy zaakceptowano regulamin?
		if (!isset($_POST['regul'])){
			$wszystko_OK=false;
			$_SESSION['e_regul']="Zakceptuj regulamin.";
		}

		//obsługa testu captcha
		$sekret = "6LfsSqMUAAAAAB0w2JiX38diEV9oBOC1LDBg5mdh";
		$sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$_POST['g-recaptcha-response']);
		$odpowiedz = json_decode($sprawdz);
		if ($odpowiedz->success==false){
			$wszystko_OK=false;
			$_SESSION['e_bot']="Potwierdź, że nie jesteś botem!";
		}

		require_once "connectKursRegi.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		try{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0){
				throw new Exception(mysqli_connect_errno());
			}else{
				//Czy email już istnieje?
				$rezultat = $polaczenie->query("SELECT email FROM uzytkownicy WHERE email='$email'");
				if (!$rezultat) throw new Exception($polaczenie->error);
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili > 0)
				{
					$wszystko_OK=false;
					$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
				}
				//Czy nick jest już zarezerwowany?
				$rezultat = $polaczenie->query("SELECT login FROM uzytkownicy WHERE login='$nick'");
				if (!$rezultat) throw new Exception($polaczenie->error);
				$ile_takich_nickow = $rezultat->num_rows;
				if($ile_takich_nickow>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_nick']="Istnieje już konto o takim nicku! Wybierz inny.";
				}
			}
		}catch(Exception $e){
			echo '<span class="error">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}finally{
			$polaczenie->close();
		}

		if ($wszystko_OK){
			$_SESSION['regi'] = true;
			$_SESSION['nameUser'] = $_POST['nameUser'];
			$_SESSION['surname'] = $_POST['surname'];
			$_SESSION['Pesel'] = $_POST['Pesel'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['login'] = $_POST['login'];
			$_SESSION['haslo_hash'] = $haslo_hash;
			$_SESSION['city'] = $_POST['city'];
			$_SESSION['street'] = $_POST['street'];
			$_SESSION['building'] = $_POST['building'];
			$_SESSION['kod1'] = $_POST['kod1'];
			$_SESSION['postoffice'] = $_POST['postoffice'];
			if( $_POST['flat'] != "" || $_POST['flat'] != null){
				$_SESSION['flat'] = $_POST['flat'];
			}else{
				$_SESSION['flat'] = null;
			}

			header('Location: regi.php');
		}
	}
    
?>
<!Doctype html>
<html>
	<head>
		<title>
			DŁUGI kurs jezyka angielskiego
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="./css/style_logIn.css">
		<link rel="stylesheet" href="./css/style1280.css">

		<link rel="stylesheet" href="./css/styleMob.css" />
		<link rel="stylesheet" href="./css/styleMobBe.css" />

		<script src="./jq/jquery-3.3.1.min.js"></script>
		<script src="./jq/jquery.color-2.1.2.min.js"></script>
		<script src="./js/jq.js"></script>
		<script src="./js/jq_regi.js"></script>

		<script src="./js/jq_menuMob.js"></script>

		<!--    reCAPTCHA           -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!--	Bootstrap 4.3.1		-->

		<link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap-grid.css" />
		<script src="./bootstrap-4.3.1-dist/js/bootstrap.js"></script>
	</head>
	<body>
		<div id="container" class="container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<header>
				<img src="img/logo.png">
			</header>
			<div class="menu_horizontal col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<nav class="ham_button ham_button_def col-xl-0 col-lg-0 col-md-12  col-sm-12 col-12">
				</nav>
				<div class="menu_horizontal_mob col-12 col-sm-12 col-md-12 col-xl-2 col-lg-2   ">
					<a href="index.php">Main page</a>
				</div>
				<div class="menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a>Gramar</a>
					<ul>
						<li><a href="gramatyka_present_countinuous.php">Present tenses</a></li>
						<li><a href="lorem_ipsum.php">Past tenses</a></li>
						<li><a href="lorem_ipsum.php">Future tenses</a></li>
						<li><a href="lorem_ipsum.php">Modal verbs</a></li>
					</ul>
				</div>
				<div class="menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a>Vocabulary</a>
					<ul>
						<li><a href="czlowiek.php">Human</a></li>
						<li><a href="lorem_ipsum.php">Home</a></li>
						<li><a href="lorem_ipsum.php">School</a></li>
						<li><a href="lorem_ipsum.php">Job</a></li>
						<li><a href="lorem_ipsum.php">Family and friends</a></li>
						<li><a href="lorem_ipsum.php">Food</a></li>
						<li><a href="idiomy.php">Idioms</a></li>
					</ul>
				</div>
				<div class="menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a>Phonetics</a>
					<ul>
						<li><a href="bee.php">Monophtongs</a></li>
						<li><a href="lorem_ipsum.php">Diphtongs and Triphtongs</a></li>
						<li><a href="lorem_ipsum.php">Plosives</a></li>
						<li><a href="lorem_ipsum.php">Fricatives</a></li>
						<li><a href="lorem_ipsum.php">Liquids and veral nasal</a></li>
					</ul>
				</div>
				<div class="menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a>Culture</a>
					<ul>
						<li><a href="geographical_identities.php">The country</a></li>
						<li><a href="lorem_ipsum.php">The people</a></li>
						<li><a href="lorem_ipsum.php">Politics and government</a></li>
						<li><a href="lorem_ipsum.php">International relations</a></li>
						<li><a href="lorem_ipsum.php">The legal system</a></li>
						<li><a href="lorem_ipsum.php">The economy</a></li>
						<li><a href="lorem_ipsum.php">Social services</a></li>
						<li><a href="lorem_ipsum.php">Education</a></li>
						<li><a href="lorem_ipsum.php">The media</a></li>
						<li><a href="lorem_ipsum.php">Religion</a></li>
						<li><a href="lorem_ipsum.php">Leisure, sports and the arts</a></li>
					</ul>
				</div>
				<div class="menu_horizontal_curent menu_horizontal_mob col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<a href="login.php">Log in</a>
				</div>
			</div>
			<div class="content contentLogIn">
				<div class="form offset-xl-4 offset-lg-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
					<form id="regiForm" method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>">
						<h2>Rejestracja do ENG</h2>

                        <p>Imie*:</p>
						<input class="inputText" type="text" name="nameUser"/>
						
                        <p>Nazwisko*:</p>
						<input class="inputText" type="text" name="surname"/>
						
                        <p>PESEL*:</p>
						<input class="inputText" type="text" name="Pesel"/>
						<p class="pesel error" id="pesel">To nie jest pesel.</p>
						<?php
							if (isset($_SESSION['e_pesel'])){
								echo '<p class="error">'.$_SESSION['e_pesel'].'</p>';
								unset($_SESSION['e_pesel']);
							}
						?>

                        <p>E-mail*:</p>
						<input class="inputText" type="text" name="email"/>
						<p class="email error" id="email">To nie jest adress e-maile.</p>
						<?php
							if (isset($_SESSION['e_email'])){
								echo '<p class="error">'.$_SESSION['e_email'].'</p>';
								unset($_SESSION['e_email']);
							}
						?>

						<p>Login*:</p>
						<input class="inputText" type="text" name="login"/>
						<p class="login error" id="login">Login musi zawierać minimum 3 znaki.</p>
						<?php
							if (isset($_SESSION['e_nick'])){
								echo '<p class="error">'.$_SESSION['e_nick'].'</p>';
								unset($_SESSION['e_nick']);
							}
						?>						
						
                        <p>Hasło*:</p>
						<input class="inputText" type="password" name="npassword"/>
						<p class="password error" id="password">Hasło musi mieć więcej niż 6 znaków.</p>
						<?php
							if (isset($_SESSION['e_password'])){
								echo '<p class="error">'.$_SESSION['e_password'].'</p>';
								unset($_SESSION['e_password']);
							}
						?>

                        <p>Powtórz hasło*:</p>
						<input class="inputText" type="password" name="rep_password"/>
						<p class="rep_password error" id="rep_password">Hasła nie są idetyczne.</p>
						<?php
							if (isset($_SESSION['e_rep_password'])){
								echo '<p class="error">'.$_SESSION['e_rep_password'].'</p>';
								unset($_SESSION['e_rep_password']);
							}
						?>

						<p>Miejscowość*:</p>
						<input class="inputText" type="text" name="city"/>
						
						<p>Ulica*:</p>
						<input class="inputText" type="text" name="street"/>
						
						<p>Numer budynku*:</p>
						<input class="inputTextBuild" type="text" name="building"/>

						<p>Numer lokalu:</p>
						<input class="inputTextBuild" type="text" name="flat"/>

						<p>Kod pocztowy*:</p>
						<input type="text" name="kod1"/>
						<p class="kod1 error" id="kod1">Błędny kod pocztowy.</p>

						<p>Poczta*:</p>
						<input type="text" name="postoffice"/>

						<div class="reCaptcha">
							<div class="g-recaptcha" data-sitekey="6LfsSqMUAAAAAMXn1e3bhZrW7FpYFjc5q5psGo5C"></div>
						</div>

						<?php
							if (isset($_SESSION['e_bot'])){
								echo '<p class="error">'.$_SESSION['e_bot'].'</p>';
								unset($_SESSION['e_bot']);
							}
						?>

						<p>
							<label><input class="inputCheckBox" type="checkbox" name="regul">Akceptuję regulamin.</label>
						</p>
                        	<input class="submit" type="submit" id="submit" value="Zarejestruj" disabled="disabled">
						<p>
							* - pola wymagane
						</p>
                    </form>
				</div>
			</div>
			<footer>
				<h5>Design & Code by Łukasz Kwaśny & Kamil Dziok</h5>
			</footer>
		</div>
	</body>
</html>