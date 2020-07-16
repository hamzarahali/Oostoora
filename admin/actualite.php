<?php 
    include "./includes/head.php" ;
    include "./includes/db.php" ;
?>

<?php 
    if ( isset ($_GET ['id_act']) ) {
        $id = $_GET ['id_act'] ;

        $req = "DELETE FROM actualite WHERE id = '$id'" ;
        $res = mysqli_query($con,$req) ;

        if ( $res ) 
            header ('location: actualite.php') ;
    }
?>

<div class="row m-0">
    <?php $active="actualite"; include "./includes/nav.php" ?>
    <div class="col-9  py-4">
        <a href="ajouter-actualite.php" style="color:#11706C">Actualités: <i class="fas fa-plus-circle"></i></a>
        <table class="table mt-4">
            <thead>
                <tr style="color:#11706C">
                    <th scope="col" style="border-top: none;">Titre</th>
                    <th scope="col" style="border-top: none;">Image </th>
                    <th scope="col" style="border-top: none;">Text</th>
                    <th scope="col" style="border-top: none;"></th>
                </tr>
            </thead>
            <?php                
                $req = "SELECT * FROM actualite" ; 
                $res = mysqli_query ($con, $req) ;
                while ( $row = mysqli_fetch_assoc($res) ) {
            ?>
            <tr>
                <td><?= $row['titre'] ?></td>
                <td><img src='<?= "./images/actualite/".$row ['image'] ?>' style="width: 150px;height: 70px;"></td>
                <td><?= $row['description'] ?></td>
                <td class="edit-buttons">
                    <a href="<?= 'actualite.php?id_act='.$row['id'] ?>" class="far fa-trash-alt" style="color:#11706C"></a>
                </td>
            </tr>
                <?php } ?>
        </table>
    </div>
</div>