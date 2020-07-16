<?php
	include 'includes/db.php' ;

    if ( isset( $_POST ['connecter'] ) ) {
		$email = $_POST ['email'] ;
		$password = md5($_POST ['password']) ;

		$req1 = "SELECT * FROM entreprise WHERE email LIKE '$email' AND mdps LIKE '$password' AND status LIKE 'Actif'" ;
		$res1 = mysqli_query($con, $req1) ;
		$row1 = mysqli_num_rows($res1) ;

		if ( $row1 == 0 ) {
			header ('location: connexion_front.php?msg=Email ou mot de passe incorrecte') ;
			return;
		} else if ( $row1 !=0 ){
			header ('location: acceuil.php') ;		
			return;
		}
	

		$req2 = "SELECT * FROM fournisseur WHERE mail LIKE '$email' AND mdp LIKE '$password' AND status LIKE 'Actif'" ;
		$res2 = mysqli_query($con, $req2) ;
		$row2 = mysqli_num_rows($res2) ;

		if ( $row2 == 0 ) {
			header ('location: connexion_front.php?msg=Email ou mot de passe incorrecte') ;
			return;
		} else {
			header ('location: acceuil.php') ;		
			return;
		}
	}
?>