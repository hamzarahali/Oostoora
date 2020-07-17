<?php 
    include 'includes/db.php' ;

    if ( isset( $_POST ['inscription'] ) ) {
        
        $nom = $_POST ['nom'] ; 
        $date = $_POST ['date'] ;
        $cat = $_POST ['cat'] ;
        $tel = $_POST ['tel'] ; 
        $email = $_POST ['email'] ; 
        $password = md5($_POST ['password']) ;
        $status = "Attente" ;

        $req = "SELECT * FROM fournisseur WHERE mail LIKE '$email'" ;
        $res = mysqli_query($con, $req) ;
        $num = mysqli_num_rows ($res) ;

        if ( $num == 0 ) {

            $req = "INSERT INTO fournisseur (nom, datec, numtel, idcat, mail, mdp, status) VALUES ('$nom', '$date', '$tel', $cat, '$email', '$password', '$status') ";
            $res = mysqli_query($con, $req) ;

            if ( $res ) {
                session_start();
                $_SESSION['email'] = $email ;
                $_SESSION['type'] = "client" ;
                $_SESSION['success'] = "Inscription avec succés, Completez etape 3" ; 
                header('location: inscp-loc.php') ; 
            }
        } else {
            header ("location: inscp-client1.php?msg=Email existe deja");
        }
    }
?>