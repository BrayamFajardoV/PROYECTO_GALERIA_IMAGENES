<?php include('Conexion.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Galeria de imagenes</title>
</head>

<body>

    <div>
        <h1 class="text-center bg-black p-2 rounded text-white">CATALOGO DE IMAGENES</h1>
    </div>
    <br>
    <a href="Index.php" class="btn btn-danger" style="margin-left: 46rem;">Regresar</a>
    <br>
    <?php
    $sql = 'SELECT * FROM imagen ORDER BY Id ASC';
    $res = mysqli_query($con, $sql);

    if (mysqli_num_rows($res) > 0) {
        while ($images = mysqli_fetch_assoc($res)) { ?>
            <div style="display: inline-block; justify-content: space-around; padding: 10px; margin-left: 2rem">
                <img class="bg-black p-1 mx-auto rounded" style="width: 200px; height: 200px;" src="Subidas/<?= $images['Imagen'] ?>" />
            </div>  
    
    <?php }
    } 
    ?>
    <br>

</body>

</html>