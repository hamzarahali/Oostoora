<?php include "./includes/head.php"?>
<link href="css/categories.css" rel="stylesheet">


<div class="container">

        <?php 
            include 'includes/db.php' ;
            if ( isset ($_GET ['rech']) ) { 
                $rech = $_GET ['rech'] ;

                $req = "SELECT * FROM produit WHERE nomp LIKE '$rech'" ; 
                $res = mysqli_query($con, $req) ;
                
                if ($res) { 
                    $row = mysqli_num_rows($res) ;
                    if ( $row !=0 ) {
        ?> 
                <h3 class="sub-title text-center my-5">Liste Produit</h3>
                <div class="row">
        <?php 
                    
                        while ( $produit = mysqli_fetch_assoc ($res)) { 
            
        ?>
                <div class="col-4  text-center p-4 ">
                    <div class="card-content">
                        <img src='<?= "../admin/images/produit/".$produit ['imge'] ?>'  class="card-img my-3"  >
                        <h6 class="card-desc my-3 ">
                            <?= $produit ['prix'] ?>
                        </h6>
                        <a href=# class="card-link my-4">Voir les produits</a>
                    </div>
                </div>
                    <?php }}}} ?>
    </div>

    <?php 
            include 'includes/db.php' ;
            if ( isset ($_GET ['rech']) ) { 
                $rech = $_GET ['rech'] ;

                $req = "SELECT * FROM marque WHERE nomm LIKE '$rech'" ; 
                $res = mysqli_query($con, $req) ;
                
                if ($res) { 
                    $row = mysqli_num_rows($res) ;
                    if ( $row !=0 ) {
        ?> 
                <h3 class="sub-title text-center my-5">Liste marque</h3>
                <div class="row">
        <?php 
                    
                        while ( $marque = mysqli_fetch_assoc ($res)) { 
            
        ?>
                <div class="col-4  text-center p-4 ">
                    <div class="card-content">
                        <img src='<?= "../admin/images/produit/".$marque ['imag'] ?>'  class="card-img my-3"  >
                        <h6 class="card-desc my-3 ">
                            <?= $marque ['discrip'] ?>
                        </h6>
                        <a href=# class="card-link my-4">Voir les produits</a>
                    </div>
                </div>
                    <?php }}}} ?>
    </div>
</div>

<?php include "./includes/footer.php"?>