<?php include "./includes/head.php" ?>
<div class="row m-0">
    <?php $active="marque";  include "./includes/nav.php" ?>
    <div class="col-9  py-4">
        <a href="ajouter-marque.php" style="color:#11706C">Ajouter une marque <i class="fas fa-plus-circle"></i></a>
        <table class="table mt-4">
            <thead>
                <tr style="color:#11706C">
                    <th scope="col" style="border-top: none;">Nom du marque</th>
                    <th scope="col" style="border-top: none;">Logo du marque </th>
                    <th scope="col" style="border-top: none;">Code fiscale</th>
                    <th scope="col" style="border-top: none;">Discription</th>
                    <th scope="col" style="border-top: none;"></th>
                </tr>
            </thead>
            <tr>
                <td></td>
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