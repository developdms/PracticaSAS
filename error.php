<?php
require './clases/AutoCarga.php';
$files = Request::get('file');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div id="wrapper">
            <p>No se han podido enviar <?php echo Request::get('e'); ?> ficheros.</p>
            <p>Los siguientes ficheros no han sido almacenados, vuelva a intentarlo:</p>
            <ul>
            <?php
                foreach ($files as $value) {
                echo "<li>$value</li>";
                }
            ?>
            </ul>
            <a href="sas.html">Volver</a>
        </div>
    </body>
</html>