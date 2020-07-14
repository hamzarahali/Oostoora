<?php include "./includes/head.php" ?>
<div class="row m-0">
    <?php $active="rendez-vous";  include "./includes/nav.php" ?>
    <div class="col-9  py-4">
        <table class="table mt-5">
            <thead>
                <tr style="color:#11706C">
                    <th scope="col" style="border-top: none;">Date</th>
                    <th scope="col" style="border-top: none;">Heure</th>
                    <th scope="col" style="border-top: none;">Email</th>
                    <th scope="col" style="border-top: none;">Numéro de télephone</th>
                    <th scope="col" style="border-top: none;"></th>
                </tr>
            </thead>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="edit-buttons">
                    <a href="#" class=""><i class="far fa-times-circle" style="color:red"></i></a>
                    <a href="#" class=""><i class="far fa-check-circle" style="color:green"></i></a>
                </td>
            </tr>
        </table>
  </div>
</div>