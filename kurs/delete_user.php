<?php
	session_start();
	if($_SESSION['admin'] == 1){
		require_once "connect_admin.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		try{
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0){
				//echo "Error: ".$polaczenie->connect_errno;
				throw new Exception(mysqli_connect_errno());
			}else{
				$login = $_GET['login'];
				
				if($rezultat=$polaczenie->query(sprintf("DELETE FROM uzytkownicy WHERE login='$login'")))
				header('Location: admin.php');
				}
		}catch(Exception $e){
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}finally{
			$polaczenie->close();
		}
	}else{
		header('Location: login.php');
	}