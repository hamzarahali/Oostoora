<?php include "./includes/profile.php" ?>

<div class="col-3 nav">
    <div class="nav-logo mt-3">
        <img src="./image/logo.png" />
    </div>
    <ul class="nav-items my-4">

        <li class='sub-nav inscrp-link'><a href='#'>Inscription<div class='fa fa-caret-down right pl-3'></div></a>
            <ul>
                
                <li class="small ml-3 <?php echo (($active =="entreprise") ? 'active' : '') ?> "><a href='entreprise.php'>Entreprise</a></li>
                <li class=" small ml-3 <?php echo (($active == "fournisseur") ? 'active' : '') ?>"><a href='fournisseur.php'>Fournisseur</a></li>
            </ul>
        <li class='sub-nav rdv-link <?php echo (($active == "rendez-vous") ? 'active' : '') ?> '><a href='rendez-vous.php'>Les rendez-vous</a>
        <li class='sub-nav <?php echo (($active == "marque") ? 'active' : '') ?>'><a href='marque.php'>Liste des marques</a>
        <li class='sub-nav <?php echo (($active == "produit") ? 'active' : '') ?>'><a href='produit.php'>Liste des produit</a>
        <li class='sub-nav <?php  echo (($active == "actualite") ? 'active' : '') ?>'><a href='actualite.php'>Actualités</a>

    </ul>
</div>

<script>
    $('.sub-nav ul').hide();
    $(".sub-nav a").click(function () {
        $(this).parent(".sub-nav").children("ul").slideToggle("100");
        $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
    });
</script>