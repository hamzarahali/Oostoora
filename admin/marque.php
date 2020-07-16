<?php 
    include "./includes/head.php" ;
    include "./includes/db.php" ;
?>

<?php 
    if ( isset ($_GET ['id_marque']) ) {
        $id = $_GET ['id_marque'] ;

        $req = "DELETE FROM marque WHERE idm = '$id'" ;
        $res = mysqli_query($con,$req) ;

        if ( $res ) 
            header ('location: marque.php') ;
    }
?>

<div class="row m-0">
    <?php $active="marque";  include "./includes/nav.php" ?>
    <div class="col-9  py-4">
        <a href="ajouter-marque.php" style="color:#11706C">Ajouter une marque <i class="fas fa-plus-circle"></i></a>
        <table class="table mt-4">
            <thead>
                <tr style="color:#11706C">
                    <th scope="col" style="border-top: none;">Nom du marque</th>
                    <th scope="col" style="border-top: none;">Logo du marque </th>
                    <th scope="col" style="border-top: none;">Discription</th>
                    <th scope="col" style="border-top: none;"></th>
                </tr>
            </thead>
            <?php                
                $req = "SELECT * FROM marque" ; 
                $res = mysqli_query ($con, $req) ;
                while ( $row = mysqli_fetch_assoc($res) ) {
            ?>
            <tr>
                <td><?= $row['nomm'] ?></td>
                <td><img src='<?= "./images/marque/".$row ['imag'] ?>' style="width: 150px;height: 70px;"></td>
                <td><?= $row['discrip'] ?></td>
                <td class="edit-buttons">
                    <a href="<?= 'marque.php?id_marque='.$row['idm'] ?>" class="far fa-trash-alt" style="color:#11706C"></a>
                </td>
            </tr>
                <?php } ?>
        </table>
    </div>
</div>