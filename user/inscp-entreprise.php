<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/inscp-entrp.css">

</head>

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
            <form method="POST" action="inscp-entrp.php">
                <img src="./image/Groupe 870.png">
                <?php             
                    session_start(); 
                
if (isset($_GET['msg'])) { ?> <h5 class="btn btn-info" style="    width: 102%;"><?= $_GET['msg'] ?></h5> <?php } ?>
                <h2 class="title">Informations Professionnelles</h2>
                <div class="input-div one">
                    <div class="div">
                        <input type="text" class="form-control input " name="fonction" placeholder="Fonction">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="div">
                        <input type="text" name="code" class="form-control input " placeholder="Code société">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="div">
                        <i class="fa fa-envelope-o" aria-hidden="true" style="
                        position: absolute;
                        color: #2C5A69;
                        right: 10%;
                        font-size: 2rem;
                        top: 18px;
                    "></i>
                     <input type="text" name="email" class="form-control input " placeholder="Email">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="div">
                        <i class="fa fa-key" aria-hidden="true" style="
                        position: absolute;
                        color: #2C5A69;
                        right: 10%;
                        font-size: 2rem;
                        top: 18px;
                    "></i>
                        <input type="password" name="password" class="form-control input " placeholder="Code société">
                    </div>
                </div>
                
                <!-- <a href="inscp-loc.html" class="btn">Confirmer</a> -->
                <input type="submit" name="inscription" class="btn" value="Confirmer">

            </form>

        </div>
    </div>
</body>

</html>