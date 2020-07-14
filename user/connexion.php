<?php

include('parametre.php');
if ( !$conn )
	echo 'Data fieled connect ' ;
else {
	session_start();
	
	$eml= $_POST['mail'];
	$mp= $_POST['mdp'];

	$req="SELECT * FROM fournisseur WHERE mail = '$eml' AND mdp='$mp'";
	$res = mysqli_query ($conn,$req) ; 
	$row = mysqli_num_rows($res);
	if (  $row == 0){
		echo ("Mot de passe or Email invalid".mysqli_error($conn)) ;
	} else {
		$_SESSION['id'] = $mail ; 
		header ('location: acc.php') ; 
	}
}
?>