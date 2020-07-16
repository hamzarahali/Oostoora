<?php 
    include "./includes/head.php" ;
    include './includes/db.php' ;
?>

<?php 
    if ( isset ($_POST ['ajouter'] ) ) {
        $nom = $_POST ['nom'] ;
        $prix = $_POST ['prix'] ;
        $img = $_FILES['image']['name'] ;

        $req = "INSERT INTO produit(imge,prix,nomp) VALUES ('$img','$prix','$nom')";
        $res = mysqli_query($con,$req) ;

        if ( !$res )
            echo ('QueryFieled'.mysqli_error()) ;
        else {
            move_uploaded_file($_FILES['image']['tmp_name'],"./images/produit/$img");
            header ('location: produit.php') ;
        }
    }
?>  

<link href="./css/ajouter-produit.css" rel="stylesheet" />
<div class="row m-0">
    <div class="col-1 border"></div>
    <div class="col-11">
        <div class="info-content">
            <form method="POST" action="" enctype="multipart/form-data">
                <h2 class="title m-5">Ajouter un produit</h2>
                <div class="input-div one">
                    <div class="div">
                        <input type="text" name="nom" class=" input " placeholder="Nom du produit ">
                    </div>
                </div>
                <div class="input-div one" style="grid-template-columns: auto;">
                    <div class="div">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label" for="validatedCustomFile">Image du produit </label>
                        </div>
                    </div>
                </div>

                <div class="input-div one">
                    <div class="div">
                        <input type="text" name="prix" class=" input " placeholder="Prix">
                    </div>
                </div>
                <button type="submit" name="ajouter" class="btn">Confirmer</button>



            </form>
        </div>
    </div>
</div>
</body>

</html>