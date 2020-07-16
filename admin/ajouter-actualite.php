<?php include "./includes/head.php" ?>
<?php 
    include './includes/db.php' ;
    if ( isset ($_POST ['ajouter'] ) ) {
        $nom = $_POST ['titre'] ;
        $description = $_POST ['description'] ;
        $img = $_FILES['image']['name'] ;

        $req = "INSERT INTO actualite(image,description,titre) VALUES ('$img','$description','$nom')";
        $res = mysqli_query($con,$req) ;

        if ( !$res )
            echo ('QueryFieled'.mysqli_error()) ;
        else {
            move_uploaded_file($_FILES['image']['tmp_name'],"./images/actualite/$img");
            header ('location: actualite.php') ;
        }
    }
?>

<link href="./css/ajouter-actualite.css" rel="stylesheet" />
<div class="row m-0">
    <div class="col-1 border"></div>
    <div class="col-11">
        <div class="info-content">
            <form method="POST" action="" enctype="multipart/form-data">
                <h2 class="title m-5">Ajouter L'actualités</h2>
                <div class="input-div one">
                    <div class="div">
                        <input type="text" name="titre" class=" input " placeholder="titre">
                    </div>
                </div>
                <div class="input-div one" style="grid-template-columns: auto;">
                    <div class="div">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label" for="validatedCustomFile">Image</label>
                        </div>
                    </div>
                </div>

                <div class="input-div one">
                    <div class="div">
                        <textarea type="text" name="description" class=" input " placeholder="text"></textarea>
                    </div>
                </div>
                <button type="submit" name="ajouter" class="btn">Confirmer</button>



            </form>
        </div>
    </div>
</div>
</body>

</html>