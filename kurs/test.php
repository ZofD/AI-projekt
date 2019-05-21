<?php 

    session_start();

    if (!isset($_SESSION['zalogowany'])){
		header('Location: login.php');
		exit();
	}

    $fid = $_GET['id'];

	require_once "connect_user.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
	try{
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
		if ($polaczenie->connect_errno!=0){
				throw new Exception(mysqli_connect_errno());
		}else{
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
					<script src="./js/jq_login.js"></script>

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
						<div class="content content_test">
							<h1><?php echo "Test z działu ".$fid; ?></h1>
							<div class="form offset-xl-2 offset-lg-2 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
								<div class="">
									<form action="spr.php?id=<?php echo $fid; ?>" method="POST">
									<?php
										if($rezultat=$polaczenie->query(sprintf("SELECT id_pytania, pytanie, odp_pierwsza, odp_druga, odp_trzecia, odp_czwarta FROM pytania AS p LEFT JOIN testy AS t ON p.id_testu = t.id_testu WHERE t.nazwa_testu='$fid'"))){
											$ile_pytan=$rezultat->num_rows;
											if($ile_pytan>0){
												while($wiersz=$rezultat->fetch_assoc()){
													?>
													<div>
														<?php echo "<h3>".$wiersz['pytanie']."</h3>"; ?>
														<ul>
															<li>
																<input type='radio' name='answer<?php echo $wiersz['id_pytania']; ?>' id='answer<?php echo $wiersz['id_pytania']; ?>' value='0' />
																<?php echo $wiersz['odp_pierwsza']; ?>
															</li>
															
															<li>
																<input type='radio' name='answer<?php echo $wiersz['id_pytania']; ?>' id='answer<?php echo $wiersz['id_pytania']; ?>' value='1' />
																<?php echo $wiersz['odp_druga']; ?>
															</li>

															<li>
																<input type='radio' name='answer<?php echo $wiersz['id_pytania']; ?>' id='answer<?php echo $wiersz['id_pytania']; ?>' value='2' />
																<?php echo $wiersz['odp_trzecia']; ?>
															</li>

															<li>
																<input type='radio' name='answer<?php echo $wiersz['id_pytania']; ?>' id='answer<?php echo $wiersz['id_pytania']; ?>' value='3' />
																<?php echo $wiersz['odp_czwarta']; ?>
															</li>
														</ul>
													</div>
													<?php
												}
												$rezultat->free_result();
											}
										}
									?>
									<input type="submit" class="button" value="Sprawdź" />
									</form>
								</div>
							</div>
						</div>
						<footer>
						</footer>
					</div>
				</body>
			</html>
			<?php
		}
	}catch(Exception $e){
		echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
		echo '<br />Informacja developerska: '.$e;
	}finally{
		$polaczenie->close();
	}
?>