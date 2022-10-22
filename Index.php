<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/Style.css">
    
    <title>Subir Imagenes</title>
</head>

<body class="bg-light">

        <?php if (isset($_GET['error'])) :?>
            <div class="alert alert-danger" role="alert">
             <?php echo $_GET['error']; ?>
            </div>
        <?php endif ?>

    <form action="SubirImagen.php" method="POST" enctype="multipart/form-data" class="text-center">
        <h2 class="text-center bg-dark text-white p-2 rounded ">Elegir Imagen</h2>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile01" name="my_image">
        </div>
        <input type="submit" name="submit" value="Subir" class="btn btn-dark">
        <a href="VistaImagen.php" class="btn btn-danger">Ir al catalogo de imagenes</a>
    </form>

    <footer class="text-center text-white fixed-bottom bg-primary">
	  <!-- Copyright -->
	  <div class="text-center p-3">
	    © 2022 Copyright:
	    <a class="text-white" href="https://www.youtube.com/channel/UCV4MG6Yzgq09EkytV2a85VA">YamDevs</a>
	  </div>
	  <!-- Copyright -->
	</footer>
</body>

</html>