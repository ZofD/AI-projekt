<?php

    session_start();

    if ( !isset($_SESSION['regi']) ){
		header('Location: index.php');
    	exit();
    }
    
    $login = $_SESSION['login'];
    $password = $_SESSION['haslo_hash'];
    $email = $_SESSION['email'];
    $pesel = $_SESSION['Pesel'];
    $city = $_SESSION['city'];
    $street = $_SESSION['street'];
    $building = $_SESSION['building'];
    $flat = $_SESSION['flat'];
    $kod1 = $_SESSION['kod1'];
    $poczta = $_SESSION['postoffice'];
    $imie = $_SESSION['nameUser'];
    $nazwisko = $_SESSION['surname'];

    require_once "connectKursRegi.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
    try{
		$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
		if ($polaczenie->connect_errno!=0){
			throw new Exception(mysqli_connect_errno());
		}else{
            if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (
                NULL, '$login', '$password', '$email', '$pesel', 
                '$city', '$street', '$building', '$flat', '$kod1', 
                '$poczta', '$imie', '$nazwisko')")){
				header('Location: login.php');
			}else{
				throw new Exception($polaczenie->error);
			}
		}
	}catch(Exception $e){
		echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
		echo '<br />Informacja developerska: '.$e;
    }finally{
        $polaczenie->close();
        session_destroy();
    }
?>