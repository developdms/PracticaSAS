<?php

require 'clases/AutoCarga.php';
$imagen = Request::get('imagen');

$extension = pathinfo($imagen)['extension'];

header('Content-type: image/' . $extension);

readfile('../../carpetaimagenes/' . $imagen);
?>