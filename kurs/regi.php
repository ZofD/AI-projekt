<?php

session_start();

    if (
        (!isset($_SESSION['nameUser'])) || 
        (!isset($_SESSION['surname'])) ||
        (!isset($_SESSION['Pesel'])) ||
        (!isset($_SESSION['email'])) ||
        (!isset($_SESSION['login'])) ||
        (!isset($_SESSION['haslo_hash'])) ||
        (!isset($_SESSION['city'])) ||
        (!isset($_SESSION['street'])) ||
        (!isset($_SESSION['building'])) ||
        (!isset($_SESSION['kod1'])) ||
        (!isset($_SESSION['postoffice'])) 
    ){
		header('Location: index.html');
    	exit();
    }
    
    require_once "osadnicy/connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
    try{
		$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
		if ($polaczenie->connect_errno!=0){
			throw new Exception(mysqli_connect_errno());
		}else{
            header('Location: login.html');
    	    exit();
		}
	}catch(Exception $e){
		echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
		echo '<br />Informacja developerska: '.$e;
	}
?>