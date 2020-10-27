<?php
session_start();
setcookie("MiCookie", "Azul", time() + (86400 * 30));
date_default_timezone_set('America/Lima');


if (isset($_POST["escribiendo"]) && isset($_POST["email"])) {
    $image = imagecreate(550, 200);
    $background_color = imagecolorallocate($image, 100, 153, 150);
    $text_color = imagecolorallocate($image, 12, 12, 12);
    imagestring($image, 10, 180, 100, $_POST["escribiendo"], $text_color);
    imagestring($image, 5, 180, 120, $_POST["email"], $text_color);
    header("Content-Type: image/png");
    imagepng($image);
    imagedestroy($image);
    header("Content-disposition: attachment; filename=escribiendo_del_archivo.png");
    header("Content-type: MIME");
    readfile("escribiendo_del_archivo.png");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear imagen</title>
</head>

<body>

    <div style="text-align:center">
        <h1>Crear imagen</h1>

        <form action="imagen.php" method="post">
        
        	<label>Nombre</label>
            <input name="escribiendo" type="text" placeholder="Escribe el contenido">
            <br><br>
            
            <label>Correo</label>
            <input name="email" type="text" placeholder="Escribe el contenido">
            <br><br>
            
            <input type="submit" name="enviar" value="Crear Imagen">
            
        </form>
        <h2>Regresar al <a href="index.php">Inicio</a></h2>
    </div>

</body>

</html>