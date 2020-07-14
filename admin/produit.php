<?php include "./includes/head.php" ?>
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td class="edit-buttons">
                    <a href="#" class=""><i class="far fa-trash-alt" style="color:#11706C"></i></i></a>
                </td>
            </tr>
        </table>
    </div>
</div>