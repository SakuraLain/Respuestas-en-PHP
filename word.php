<?php

require 'vendor/autoload.php';

if (isset($_POST["escribiendo"])) {
    $phpWord = new \PhpOffice\PhpWord\PhpWord();
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: attachment;filename="documento.docx"');
    $section = $phpWord->addSection();
    $section->addText($_POST["escribiendo"]);
    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    $objWriter->save('php://output');
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
		<h1>Creando documento de Word</h1>
	
			<form action="word.php" method="post">
			
				<label>Contenido del archivo</label>
				<input name="escribiendo" type="text" placeholder="Agrega el Contenido"><br><br>
				
           		<input type="submit" name="enviar" value="Crear Word">
           		
        	</form>
        <h2>Regresar a <a href="index.php">Inicio</a></h2>
    </div>
</center>
</body>

</html>