<?php

include('parametre.php');

 if ( isset ( $_POST['ok'] ) ) {
            $date = $_POST['date'] ;
            $hr = $_POST['heure'] ;
			$ad= $_POST['adrmail'];
			$tel= $_POST['tel'];
	 $req = " INSERT INTO rendez_vous(date,heure,adrmail,tel) VALUES ( '$date' , '$hr' , '$ad' , '$tel') "  ; 
     $res = mysqli_query ($conn,$req) or die(mysqli_error($conn)); 
 }
         

?>