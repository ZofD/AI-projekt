<?php
	session_start();
	require_once "connect_logi.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
	try{
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
		if ($polaczenie->connect_errno!=0){
			//echo "Error: ".$polaczenie->connect_errno;
			throw new Exception(mysqli_connect_errno());
		}else{
			$login = $_POST['login'];
			$haslo = $_POST['password'];
			$login = htmlentities($login, ENT_QUOTES, "UTF-8");
			//$sql="SELECT login, haslo FROM uzytkownicy WHERE login='$login' AND haslo='$haslo'";
			if($rezultat=$polaczenie->query(sprintf("SELECT id_user, login, haslo, admin FROM uzytkownicy WHERE login='%s'",mysqli_real_escape_string($polaczenie,$login)))){
				$ilu_userow=$rezultat->num_rows;
				if($ilu_userow==1){
					$wiersz=$rezultat->fetch_assoc();
					if (password_verify($haslo, $wiersz['haslo'])){
						$_SESSION['zalogowany'] = true;
						$_SESSION['id_user'] = $wiersz['id_user'];
						$_SESSION['login'] = $wiersz['login'];
						$_SESSION['admin'] = $wiersz['admin'];
						unset($_SESSION['blad']);
						$rezultat->free_result();
						if($wiersz['admin'] == 0){
							header('Location: user.php');
						}else{
							header('Location: admin.php');
						}
					}else{
						$_SESSION['blad'] = 'Nieprawidłowe hasło!';
						header('Location: login.php');
					}
				} else {
					$_SESSION['blad'] = 'Nieprawidłowy login!';
					header('Location: login.php');
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