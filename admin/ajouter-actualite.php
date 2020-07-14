<?php include "./includes/head.php" ?>
<link href="./css/ajouter-actualite.css" rel="stylesheet" />
<div class="row m-0">
    <div class="col-1 border"></div>
    <div class="col-11">
        <div class="info-content">
            <form method="POST">
                <h2 class="title m-5">Ajouter L'actualités</h2>
                <div class="input-div one">
                    <div class="div">
                        <input type="text" class=" input " placeholder="titre">
                    </div>
                </div>
                <div class="input-div one" style="grid-template-columns: auto;">
                    <div class="div">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Image</label>
                        </div>
                    </div>
                </div>

                <div class="input-div one">
                    <div class="div">
                        <textarea type="text" class=" input " placeholder="text"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn">Confirmer</button>



            </form>
        </div>
    </div>
</div>
<script>
    $('input[type="file"]').change(function (e) {
        var fileName = e.target.files[0].name;
        $(".custom-file-label").text(fileName)
    });
</script>
</body>

</html>