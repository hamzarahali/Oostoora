<?php 
    include 'includes/db.php' ;

    if ( isset( $_POST ['inscription'] ) ) {
        
        $fonction = $_POST ['fonction'] ; 
        $code = $_POST ['code'] ;
        $email = $_POST ['email'] ; 
        $password = md5($_POST ['password']) ;
        $status = "Attente" ;

        $req = "SELECT * FROM entreprise WHERE email LIKE '$email'" ;
        $res = mysqli_query($con, $req) ;
        $num = mysqli_num_rows ($res) ;

        if ( $num == 0 ) {

            $req = "INSERT INTO entreprise (fonction, code, email, mdps, status) VALUES ('$fonction', '$code', '$email', '$password', '$status') ";
            $res = mysqli_query($con, $req) ;

            if ( $res ) {
                session_start();

                $_SESSION['email'] = $email ;
                $_SESSION['type'] = "entreprise" ;
                $_SESSION['success'] = "Inscription avec succés, Completez etape 3" ; 
                
                header('location: inscp-loc.php') ; 
            }
        } else {
            header ("location: inscp-entreprise.php?msg=Email existe deja");
        }
    }
?>