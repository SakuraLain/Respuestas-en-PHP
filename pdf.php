<?php

require 'vendor/autoload.php';

if (isset($_POST["titulo"]) && isset($_POST["nombre"]) && isset($_POST["escribiendo"])) {
    $pdf = new TCPDF();
    $pdf->AddPage();
    $pdf->Write(1, $_POST["titulo"], '', false, 'C');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetTitle($_POST["titulo"]);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->setCellPaddings(1, 1, 1, 1);
    $pdf->setCellMargins(1, 1, 1, 1);
    $pdf->Ln();
    $txt = $_POST["escribiendo"];
    $pdf->MultiCell(187, 5, $txt, 1, 'J', 1, 1, '', '', true);
    $pdf->Output($_POST["nombre"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<center>
    <div>
        <h1>Creando documento de PDF</h1>

        <form action="pdf.php" method="post">
        
        	<label> Titulo del Pdf </label>
            <input name="titulo" type="text" placeholder="Escribe el Titulo del PDF"><br><br>
            
            <label> Nombre del archivo </label>
            <input name="nombre" type="text" placeholder="Escribe el nombre del PDF"><br><br>
            
            <label> Contenido  </label>
            <input name="escribiendo" type="text" placeholder="Escribe el Contenido de PDF">

            <br><br>
            <input type="submit" name="enviar" value="Crear Pdf">
            
        </form>
        <h2>Regresar a <a href="index.php">Inicio</a></h2>
    </div>
</center>
</body>

</html>