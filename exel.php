<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (isset($_POST["escribiendo"])) {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', $_POST["escribiendo"]);
    $writer = new Xlsx($spreadsheet);
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="demo.xlsx"');
    $writer->save('php://output');
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

    <div style="text-align:center">
        <h1>Creando documento de Exel</h1>

        <form action="exel.php" method="post">
        
        	<label>Contenido </label>
            <input name="escribiendo" type="text" placeholder="Escribe el Contenido"><br><br>
            
            <input type="submit" name="enviar" value="Crear Exel">
            
        </form>
        <h2>Regresar a <a href="index.php">Inicio</a></h2>
    </div>

</body>

</html>