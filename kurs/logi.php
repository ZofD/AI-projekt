<?php
	session_start();
	require_once "connect_logi.php";
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	if ($polaczenie->connect_errno!=0){
		echo "Error: ".$polaczenie->connect_errno;
	}else{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
		$sql="SELECT login, haslo FROM uzytkownicy WHERE login='$login' AND haslo='$haslo'";
		if($rezultat=$polaczenie->query(sprintf("SELECT login, haslo FROM uzytkownicy WHERE login='%s' AND haslo='%s'",mysqli_real_escape_string($polaczenie,$login),mysqli_real_escape_string($polaczenie,$haslo)))){
			$ilu_userow=$rezultat->num_rows;
			if($ilu_userow>0){
				$wiersz=$rezultat->fetch_assoc();
				$_SESSION['zalogowany'] = true;
				$_SESSION['login'] = $wiersz['login'];
				unset($_SESSION['blad']);
				$rezultat->free_result();
				header('Location: user.php');
			} else {
				$_SESSION['blad'] = 'Nieprawidłowy login lub hasło!';
				header('Location: login.php');
			}
		}
		$polaczenie->close();
	}
?>