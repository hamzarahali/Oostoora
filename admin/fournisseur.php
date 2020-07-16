<?php include "./includes/head.php" ?>

<?php 
    include './includes/db.php' ;
    if ( isset ($_GET ['id_fournisseur_del']) ) {
        $id = $_GET ['id_fournisseur_del'] ;

        $req = "DELETE FROM fournisseur WHERE idfourni = '$id'" ;
        $res = mysqli_query($con,$req) ;

        if ( $res ) 
            header ('location: fournisseur.php') ;
    }
?>

<?php 
    if ( isset ($_GET ['id_fournisseur_mod']) ) {
        $id = $_GET ['id_fournisseur_mod'] ;
        $status = "Actif" ;

        $req = "UPDATE fournisseur SET status = '$status' WHERE idfourni = '$id'" ;
        $res = mysqli_query($con,$req) ;

        if ( $res ) 
            header ('location: fournisseur.php') ;
    }
?>

<div class="row m-0">
    <?php $active="fournisseur";  include "./includes/nav.php" ?>
    <div class="col-9  py-4">
        <table class="table mt-5">
            <thead>
                <tr style="color:#11706C">
                    <th scope="col" style="border-top: none;">Nom du marque</th>
                    <th scope="col" style="border-top: none;">Date de création</th>
                    <th scope="col" style="border-top: none;">Code fiscale</th>
                    <th scope="col" style="border-top: none;">Numéro de télephone</th>
                    <th scope="col" style="border-top: none;">Email</th>
                    <th scope="col" style="border-top: none;">Mot de passe</th>
                    <th scope="col" style="border-top: none;"></th>
                </tr>
            </thead>
            <?php 
                include "./includes/db.php" ;

                $req = "SELECT * FROM fournisseur  WHERE status LIKE 'Attente'" ; 
                $res = mysqli_query ($con, $req) ;
                while ( $row = mysqli_fetch_assoc($res) ) {
            ?>
            <tr>
                <td><?= $row ['nom'] ?></td>
                <td><?= $row ['datec'] ?></td>
                <td><?= $row ['idcat'] ?></td>
                <td><?= $row ['numtel'] ?></td>
                <td><?= $row ['mail'] ?></td>
                <td><?= $row ['mdp'] ?></td>
                <td class="edit-buttons">
                    <a href="<?= 'fournisseur.php?id_fournisseur_del='.$row ['idfourni'] ?>" class="far fa-times-circle" style="color:red"></a>
                    <a href="<?= 'fournisseur.php?id_fournisseur_mod='.$row ['idfourni'] ?>" class="far fa-check-circle" style="color:green"></a>
                </td>
            </tr>
                <?php } ?>
        </table>
  </div>
</div>