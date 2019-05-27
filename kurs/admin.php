<?php
	session_start();
	if (!isset($_SESSION['zalogowany'])){
		header('Location: login.php');
		exit();
	}

	if($_SESSION['admin'] == 0){
		header('Location: user.php');
		exit();
	}

	require_once "connect_admin.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
	try{
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
		if ($polaczenie->connect_errno!=0){
			//echo "Error: ".$polaczenie->connect_errno;
			throw new Exception(mysqli_connect_errno());
		}else{
			$id_user = $_SESSION['id_user'];
			if($rezultat=$polaczenie->query(sprintf("SELECT * FROM uzytkownicy WHERE id_user='%s'",mysqli_real_escape_string($polaczenie,$id_user)))){
				$dane=$rezultat->num_rows;
				if($dane==1){
					$wiersz=$rezultat->fetch_assoc();

					$_SESSION['zalogowany'] = true;
					$_SESSION['id_user'] = $wiersz['id_user'];
					$_SESSION['login'] = $wiersz['login'];
					$_SESSION['email'] = $wiersz['email'];
					$_SESSION['pesel'] = $wiersz['PESEL'];
					$_SESSION['city'] = $wiersz['miejscowosc'];
					$_SESSION['street'] = $wiersz['ulica'];
					$_SESSION['building'] = $wiersz['nr_budynku'];
					$_SESSION['flat'] = $wiersz['nr_lokalu'];
					$_SESSION['kod1'] = $wiersz['kod_pocztowy'];
					$_SESSION['postoffice'] = $wiersz['poczta'];
					$_SESSION['nameUser'] = $wiersz['imie'];
					$_SESSION['surname'] = $wiersz['nazwisko'];

					$rezultat->free_result();
				}
			}
		}
	}catch(Exception $e){
		echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
		echo '<br />Informacja developerska: '.$e;
    }finally{
        $polaczenie->close();
    }
?>
<!Doctype html>
<html>
	<head>
		<title>
			DŁUGI kurs jezyka angielskiego
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<link rel="stylesheet" href="./css/styleMob.css" />
		<link rel="stylesheet" href="./css/styleMobGPT.css" />

		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="./css/style_user.css">
		<link rel="stylesheet" href="./css/style1280.css">

		<script src="./jq/jquery-3.3.1.min.js"></script>
		<script src="./jq/jquery.color-2.1.2.min.js"></script>
		<script src="./js/jq.js"></script>
		<script src="./js/jq_user.js"></script>

		<script src="./js/jq_menuMob.js"></script>

		<!--	Bootstrap 4.3.1		-->

		<link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap-grid.css" />
		<script src="./bootstrap-4.3.1-dist/js/bootstrap.js"></script>
		
	</head>
	<body>
		<div id="container" class="container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<header>
				<img src="img/logo.png">
				<div class="avatar">
					<a href=""><div></div></a>
					<p><?php echo 'Witaj '.$_SESSION['login'];?></p>
				</div>
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
					<a href="logout.php">Log out</a>
				</div>
			</div>
			<div class="content">
				<div class="component_right">
                    <h1>Dostępne konta</h1>
                    <div class="box">
					<?php
						require_once "connect_admin.php";
						mysqli_report(MYSQLI_REPORT_STRICT);
						try{
							$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
							if ($polaczenie->connect_errno!=0){
								throw new Exception(mysqli_connect_errno());
							}else{
								$id_user = $_SESSION['id_user'];
								if($rezultat=$polaczenie->query(sprintf("SELECT * FROM uzytkownicy WHERE admin='0'"))){
									$ilu_userow=$rezultat->num_rows;
									if($ilu_userow>0){
										while($wiersz=$rezultat->fetch_assoc()){
					?>
						<div>
							<form action="delete_user.php?login=<?php echo $wiersz['login']; ?>" method="POST">
                            	<h2><?php echo $wiersz['login']; ?><input type="submit" class="button" name="<?php echo $wiersz['login']; ?>" value="usuń"/></h2>
                        	</form>
						</div>				
					<?php
										}
										 $rezultat->free_result();
									}
								}
							}
						}catch(Exception $e){
							echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
							echo '<br />Informacja developerska: '.$e;
						}finally{
							$polaczenie->close();
						}
					?>
                    </div>
				</div>
				<div class="component_left">
                    <div class="settings">
						<h2><?php echo $_SESSION['nameUser']." ".$_SESSION['surname']; ?></h2>
						<p>Avatar: </p>
						<h2>ustawienia</h2>
						<p>e-mail: <?php echo "<span>".$_SESSION['email']."</span>"; ?><input type="button" /></p>						</p>
						<p>Login: <?php echo "<span>".$_SESSION['login']."</span>"; ?><input type="button" /></p>
						<p><span>Zmień hasło</span> <input type="button" /></p>
						<h2>dane osobowe</h2>
						<p>PESEL: <?php echo "<span>".$_SESSION['pesel']."</span>"; ?></p>
						<p>Miejscowość: <?php echo "<span>".$_SESSION['city']."</span>"; ?><input type="button" /></p>
						<p>Ulica: <?php echo "<span>".$_SESSION['street']."</span>"; ?><input type="button" /></p>
						<p>Nr. budynku: <?php echo "<span>".$_SESSION['building']."</span>"; ?><input type="button" /></p>
						<p>Nr. lokalu: <?php try{echo "<span>".$_SESSION['flat']."</span>";}catch(Exception $e){echo "<span>brak informacji</span>";} ?><input type="button" /></p>
						<p>Kod pocztowy: <?php echo "<span>".$_SESSION['kod1']."</span>"; ?><input type="button" /></p>
						<p>Poczta: <?php echo "<span>".$_SESSION['postoffice']."</span>"; ?><input type="button" /></p>
					</div>
				</div>
			</div>
			<footer>
				<h5>Design & Code by Łukasz Kwaśny & Kamil Dziok</h5>
			</footer>
		</div>
	</body>
</html>