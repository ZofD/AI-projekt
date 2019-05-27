<?php 

    session_start();

    if (!isset($_SESSION['zalogowany'])){
		header('Location: login.php');
		exit();
	}

    $fid = $_GET['id'];
    
    $total = 0;
    $poprawne = 0;

    // echo "Nazwa testu:".$fid."<br/>";

	require_once "connect_user.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
	try{
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
		if ($polaczenie->connect_errno!=0){
				throw new Exception(mysqli_connect_errno());
		}else{
			if($rezultat=$polaczenie->query(sprintf("SELECT id_pytania, poprawna_odpowiedz FROM pytania AS p LEFT JOIN testy AS t ON p.id_testu = t.id_testu WHERE t.nazwa_testu='$fid'"))){
                $poprawne_odpowiedzi=$rezultat->num_rows;
				if($poprawne_odpowiedzi>0){
					while($wiersz=$rezultat->fetch_assoc()){
						$total++;
						$id_pytania = $wiersz['id_pytania'];
						$pole = "answer".$id_pytania;
						$odp = $_POST[$pole];
						// echo $odp." == ".$wiersz['poprawna_odpowiedz']."<br/>";
						if($odp == $wiersz['poprawna_odpowiedz']){
							$poprawne++;
						}
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
	
	$wynik = ( $poprawne / $total ) * 100;
	$wynik = round($wynik, 2);
	$zdany = FALSE;
	if( $wynik < 50){
		$zdany = 0;
	}else{
		$zdany = 1;
	}
	// $data = date('Y-m-d H:i:s');
	$id_testu = $_SESSION['id_testu'];
	$id_user = $_SESSION['id_user'];

	// echo $_SESSION['id_testu']." ".$_SESSION['id_user']." ".$zdany." ".$data;
	require_once "connect_user.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
	try{
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
		if ($polaczenie->connect_errno!=0){
				throw new Exception(mysqli_connect_errno());
		}else{
			if( $polaczenie->query("INSERT INTO testy_uzytkownikow VALUES($id_testu, $id_user, $zdany, null, $wynik )") ){

			}else{
				throw new Exception($polaczenie->error);
			}

		}
	}catch(Exception $e){
		echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
		echo '<br />Informacja developerska: '.$e;
	}finally{
		$polaczenie->close();
    }
    // echo "Ilość pytań: ".$total." <br/> Poprawne odpowiedzi: ".$poprawne;

?>
<!Doctype html>
			<html>
				<head>
					<title>
						DŁUGI kurs jezyka angielskiego
					</title>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
					
					<link rel="stylesheet" href="./css/style.css">
					<link rel="stylesheet" href="./css/style_test.css">
					<link rel="stylesheet" href="./css/style1280.css">

					<link rel="stylesheet" href="./css/styleMob.css" />
					<link rel="stylesheet" href="./css/styleMobBe.css" />

					<script src="./jq/jquery-3.3.1.min.js"></script>
					<script src="./jq/jquery.color-2.1.2.min.js"></script>
					<script src="./js/jq.js"></script>

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
								<a href="<?php if($_SESSION['admin'] == 1){echo "admin.php";}else{echo "user.php";} ?>"><div></div></a>
								<p><?php echo 'Witaj '.$_SESSION['login'];?></p>
							</div>
						</header>
						<div class="content content_test content_spr">
							<h1><?php echo "Test z działu ".$fid; ?></h1>
							<div class="form offset-xl-2 offset-lg-2 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
								<div class="">
									<form>
										<div>
											<?php
												if($wynik < 50){
													echo "<h3 class='bad'> Nie zaliczyłeś.</h3>";
												}else{
													echo "<h3 class='good'> Zaliczyłeś.</h3>";
												}
											?>
											<p>
												Twój wynik to: <?php echo " ".$wynik."%"; ?>
											</p>
											<a href="<?php if($_SESSION['admin'] == 1){echo "admin.php";}else{echo "user.php";} ?>" class="button">Powrót</a>
										</div>
									</form>
								</div>
							</div>
						</div>
						<footer>
							<h5>Design & Code by Łukasz Kwaśny & Kamil Dziok</h5>
						</footer>
					</div>
				</body>
			</html>