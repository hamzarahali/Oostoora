<?php 
    include "./includes/head.php" ;
    include "./includes/db.php" ;
?>

<?php 
    if ( isset ($_GET ['id_produit']) ) {
        $id = $_GET ['id_produit'] ;

        $req = "DELETE FROM produit WHERE idp = '$id'" ;
        $res = mysqli_query($con,$req) ;

        if ( $res ) 
            header ('location: produit.php') ;
    }
?>

<div class="row m-0">
    <?php $active="produit";  include "./includes/nav.php" ?>
    <div class="col-9  py-4">
        <a href="ajouter-produit.php" style="color:#11706C">Liste des produits: <i class="fas fa-plus-circle"></i></a>
        <table class="table mt-4">
            <thead>
                <tr style="color:#11706C">
                    <th scope="col" style="border-top: none;">Nom du produits</th>
                    <th scope="col" style="border-top: none;">image du produit   </th>
                    <th scope="col" style="border-top: none;">prix</th>
                    <th scope="col" style="border-top: none;"></th>
                </tr>
            </thead>
            <?php                
                $req = "SELECT * FROM produit" ; 
                $res = mysqli_query ($con, $req) ;
                while ( $row = mysqli_fetch_assoc($res) ) {
            ?>
            <tr>
                <td><?= $row['nomp'] ?></td>
                <td><img src='<?= "./images/marque/".$row ['imge'] ?>' style="width: 150px;height: 70px;"></td>
                <td><?= $row['prix'] ?></td>
                <td class="edit-buttons">
                    <a href="<?= 'produit.php?id_produit='.$row['idp'] ?>" class="far fa-trash-alt" style="color:#11706C"></a>
                </td>
            </tr>
                <?php } ?>
        </table>
    </div>
</div>