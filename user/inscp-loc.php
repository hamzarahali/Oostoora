<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/inscp-entrp.css">
    

</head>

<?php 
    
?>

<body>
    <img class="wave" src="image/Groupe -7.png">
    <div class="container">
        <div class="img row">
            <div class="col" style="position: absolute;
    left: 225px;">

                <img style="width: 75%;" src="./image/Groupe -5.png">
                <p style="color: aliceblue;padding-top: 39px;font-size: x-large;">Digitazing Procurement</p>
            </div>

        </div>
        
        <div class="info-content">
            <form method="POST" action="inscription_loc.php">
                <img src="./image/Groupe 870.png">
                <h5 class="btn btn-info" style="    width: 102%;"><?php             
                    session_start(); 
                
                    if (isset($_SESSION['email'])) echo $_SESSION['success'] ?></h5>

                <h2 class="title">Localisation</h2>
                <div class="input-div one">
                    <div class="div">
                        <input type="text" name="rue" class="form-control input " placeholder="Rue">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="div">
                        <input type="text" name="code_postal" class="form-control input " placeholder="Code postal">
                    </div>
                </div>
                
                <div class="input-div one">
                    <div class="div">
                        <input type="text" name="region" class="form-control input " placeholder="Region">
                    </div>
                </div>
                
                
                <button type="submit" class="btn">Confirmer</button>



            </form>

        </div>
    </div>
</body>

</html>