<?php 

    session_start();

    if (!isset($_SESSION['zalogowany'])){
		header('Location: login.php');
		exit();
	}

    $fid = $_GET['id'];
    
    $total = 0;
    $poprawne = 0;

    echo "Nazwa testu:".$fid."<br/>";

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
						echo $odp." == ".$wiersz['poprawna_odpowiedz']."<br/>";
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
    
    echo "Ilość pytań: ".$total." <br/> Poprawne odpowiedzi: ".$poprawne;

?>