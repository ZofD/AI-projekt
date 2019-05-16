<?php
	session_start();
	require_once "connect_logi.php";
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	if ($polaczenie->connect_errno!=0){
		echo "Error: ".$polaczenie->connect_errno;
	}else{
		$login = $_POST['login'];
		$haslo = $_POST['password'];
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$sql="SELECT login, haslo FROM uzytkownicy WHERE login='$login' AND haslo='$haslo'";
		if($rezultat=$polaczenie->query(sprintf("SELECT login, haslo FROM uzytkownicy WHERE login='%s'",mysqli_real_escape_string($polaczenie,$login)))){
			$ilu_userow=$rezultat->num_rows;
			if($ilu_userow>0){
				$wiersz=$rezultat->fetch_assoc();
				if (password_verify($haslo, $wiersz['haslo'])){
					$_SESSION['zalogowany'] = true;
					$_SESSION['login'] = $wiersz['login'];
					unset($_SESSION['blad']);
					$rezultat->free_result();
					header('Location: user.php');
				}else{
					$_SESSION['haslo'] = $haslo;
					$_SESSION['pass'] = $wiersz['haslo'];
					$_SESSION['blad'] = 'Nieprawidłowe hasło!';
					header('Location: login.php');
				}
			} else {
				$_SESSION['blad'] = 'Nieprawidłowy login!';
				header('Location: login.php');
			}
		}
		$polaczenie->close();
	}
?>