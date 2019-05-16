<?php

    session_start();

    if ( !isset($_SESSION['regi']) ){
		header('Location: index.php');
    	exit();
    }
    
    $_SESSION['login'] = $login;
    $_SESSION['haslo_hash'] = $password;
    $_SESSION['email'] = $email;
    $_SESSION['Pesel'] = $pesel;
    $_SESSION['city'] = $city;
    $_SESSION['street'] = $street;
    $_SESSION['building'] = $building;
    $_SESSION['flat'] = $flat;
    $_SESSION['kod1'] = $kod1;
    $_SESSION['postoffice'] = $poczta;
    $_SESSION['nameUser'] = $imie;
    $_SESSION['surname'] = $nazwisko;

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