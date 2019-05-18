<?php 

    session_start();

    if (!isset($_SESSION['zalogowany'])){
		header('Location: login.php');
		exit();
	}

    $fid = $_GET['id'];
    
    echo "Nazwa testu:".$fid;

	require_once "connect_user.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
	try{
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
		if ($polaczenie->connect_errno!=0){
				throw new Exception(mysqli_connect_errno());
		}else{
        ?>  
            <form action="spr.php?id=<?php echo $fid; ?>" method="POST"><ol>
        <?php
		if($rezultat=$polaczenie->query(sprintf("SELECT id_pytania, pytanie, odp_pierwsza, odp_druga, odp_trzecia, odp_czwarta FROM pytania AS p LEFT JOIN testy AS t ON p.id_testu = t.id_testu WHERE t.nazwa_testu='$fid'"))){
                $ilu_userow=$rezultat->num_rows;
				if($ilu_userow>0){
					while($wiersz=$rezultat->fetch_assoc()){
					?>
						<div>
                            <li><?php echo $wiersz['pytanie']; ?>
                                <ul>
                                    <input type='radio' name='answer<?php echo $wiersz['id_pytania']; ?>' id='answer<?php echo $wiersz['id_pytania']; ?>' value='A' />
                                    <li><?php echo $wiersz['odp_pierwsza']; ?></li>
                                    
                                    <input type='radio' name='answer<?php echo $wiersz['id_pytania']; ?>' id='answer<?php echo $wiersz['id_pytania']; ?>' value='B' />
                                    <li><?php echo $wiersz['odp_druga']; ?></li>

                                    <input type='radio' name='answer<?php echo $wiersz['id_pytania']; ?>' id='answer<?php echo $wiersz['id_pytania']; ?>' value='C' />
                                    <li><?php echo $wiersz['odp_trzecia']; ?></li>

                                    <input type='radio' name='answer<?php echo $wiersz['id_pytania']; ?>' id='answer<?php echo $wiersz['id_pytania']; ?>' value='D' />
                                    <li><?php echo $wiersz['odp_czwarta']; ?></li>
                                </ul>
                            </li>
						</div>				
					<?php
					}
				    $rezultat->free_result();
				}
            }
            ?>
                </ol></form>
            <?php
		}
	}catch(Exception $e){
		echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
		echo '<br />Informacja developerska: '.$e;
	}finally{
		$polaczenie->close();
	}
?>