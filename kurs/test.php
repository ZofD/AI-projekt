<?php 

    session_start();

    if (!isset($_SESSION['zalogowany'])){
		header('Location: login.php');
		exit();
	}

    $fid = $_GET['id'];
    
    echo "Nazwa testu:".$fid;

?>