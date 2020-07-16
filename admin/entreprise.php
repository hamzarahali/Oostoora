<?php include "./includes/head.php" ?>

<?php 
    include './includes/db.php' ;
    if ( isset ($_GET ['id_entreprise_del']) ) {
        $id = $_GET ['id_entreprise_del'] ;

        $req = "DELETE FROM entreprise WHERE ident = '$id'" ;
        $res = mysqli_query($con,$req) ;

        if ( $res ) 
            header ('location: entreprise.php') ;
    }
?>

<?php 
    if ( isset ($_GET ['id_entreprise_mod']) ) {
        $id = $_GET ['id_entreprise_mod'] ;
        $status = "Actif" ;

        $req = "UPDATE entreprise SET status = '$status' WHERE ident = '$id'" ;
        $res = mysqli_query($con,$req) ;

        if ( $res ) 
            header ('location: entreprise.php') ;
    }
?>

<div class="row m-0">
    <?php $active="entreprise"; include "./includes/nav.php" ?>
    <div class="col-9  py-4">
        <table class="table mt-5">
            <thead>
                <tr style="color:#11706C">
                    <th scope="col" style="border-top: none;">Fonction</th>
                    <th scope="col" style="border-top: none;">Code société</th>
                    <th scope="col" style="border-top: none;">Email</th>
                    <th scope="col" style="border-top: none;">Mot de passe</th>
                    <th scope="col" style="border-top: none;"></th>
                </tr>
            </thead>
            <?php 
                include "./includes/db.php" ;

                $req = "SELECT * FROM entreprise WHERE status LIKE 'Attente'" ; 
                $res = mysqli_query ($con, $req) ;
                while ( $row = mysqli_fetch_assoc($res) ) {
            ?>
            <tr>
                <td><?= $row ['fonction'] ?></td>
                <td><?= $row ['code'] ?></td>
                <td><?= $row ['email'] ?></td>
                <td><?= $row ['mdps'] ?></td>
                <td class="edit-buttons">
                    <a href="<?= 'entreprise.php?id_entreprise_del='.$row ['ident'] ?>" class="far fa-times-circle" style="color:red"></a>
                    <a href="<?= 'entreprise.php?id_entreprise_mod='.$row ['ident'] ?>" class="far fa-check-circle" style="color:green"></a>
                </td>
            </tr>
                <?php } ?>
        </table>
    </div>
</div>