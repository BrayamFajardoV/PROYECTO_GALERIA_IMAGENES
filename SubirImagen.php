<?php
//Isset sirve para saber si una variable esta declarada
//$_FILES contendrá toda la información de los los ficheros subidos
//Con este IF comprobamos si esta enviando correctamente la imagen y si lo envia bien el ELSE retorna el INDEX.PHP

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
    include 'Conexion.php';
    // echo "<pre>";
    // print_r($_FILES['my_image']);
    // echo "</pre>";

    $NombreImagen = $_FILES['my_image']['name'];
    $sizeImagen = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($sizeImagen > 125000) {
            $em = "Tu archivo es demasiado grande";
            header("Location: Index.php?error=$em");
        } else {
            $img_ex = pathinfo($NombreImagen, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");
            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . "." . $img_ex_lc;
                $img_uploads_path = 'Subidas/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_uploads_path);

                //Insertar en la base de datos

                $sql = "Insert into Imagen(Imagen) values('$new_img_name')";
                mysqli_query($con, $sql);
                header("Location: VistaImagen.php");
            } else {
                $em = "Puedes subir archivos de este tipo";
                header("Location: Index.php?error=$em");
            }
        }
    } else {
        $em = "Ha ocurrido un error inesperado";
        header("Location: Index.php?error=$em");
    }
} else {
    header("Location: Index.php");
}
