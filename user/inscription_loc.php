<?php  
    include 'includes/db.php' ;

    session_start();
    
    $email = $_SESSION ['email'] ;
    $type = $_SESSION ['type'] ;

    if ($type == 'client') {
        $req = "SELECT * FROM fournisseur WHERE mail LIKE '$email'" ;
    } else {
        $req = "SELECT * FROM entreprise WHERE email LIKE '$email'" ;
    }
    $res = mysqli_query($con, $req) ;
     
    if ( $res ) {

        // $row = mysqli_fetch_assoc($res) ;
        // while ( $row = mysqli_fetch_assoc ($res)) 
        //     $id = $row ['id'];

        $id = 1;
        $rue = $_POST ['rue'] ; 
        $code = $_POST ['code_postal'] ;
        $region = $_POST ['region'] ;

        $req = "INSERT INTO locations (rue, code_postal, region, id_client, type_client) VALUES ('$rue', '$code', '$region', '$id', '$type')";
        $res = mysqli_query ($con, $req) ;
        
        if ( $res ) {
            session_destroy() ;

            header ("location: acceuil.php");
        } else {
            echo ('ahha'.mysqli_error($req));
        }
    }
?>