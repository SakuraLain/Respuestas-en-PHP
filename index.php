<?php
session_start();
setcookie("MiCookie", "Azul", time() + (86400 * 30));
date_default_timezone_set('America/Lima');

echo date('l jS \of F Y h:i:s A');
?>
<!DOCTYPE html>
<html lang="es-ES">

<head>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<center>

<br><h1>Curso:  Lenguajes de programación Back End</h1>

<figure>
	<img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Escudo_UdeG.svg" style="width: 100px;">
</figure>

<h3>Actividad Integradora. Respuestas en PHP</h3>

<h3>Profesor: Asesor: José Francisco Jafet Pérez López</h3>
<h3>Fecha de elaboración:	20/10/2020</h3>

<h2>Mayra Liliana Vera Meza</h2><br>

    <div>
        <h2>Que documento desea crear?</h2>
        <h3>Documento de <a href="word.php">Word</a></h3>
        <h3>Documento de <a href="exel.php">Exel</a></h3>
        <h3>Documento de <a href="pdf.php">PDF</a></h3>
        <h3>Crear <a href="imagen.php">Imagen</a></h3>
    </div>

</center>
</body>

</html>