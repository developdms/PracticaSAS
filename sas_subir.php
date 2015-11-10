<?php

require './clases/AutoCarga.php';

$id = Request::post('id_us');
$hoy = getdate();

$ficheros = new FileUpload('imagen');
$ficheros->setStore('../../carpetaimagenes/' . $id . '/' . $hoy['mday'] . '-' . $hoy['mon'] . '-' . $hoy['year'] . '/');
if ($ficheros->upload()) {
    header('Location:sas.html');
    exit();
}

$e = $ficheros->getError();
$url = 'error.php?e='.count($e);
foreach ($e as $key => $value) {
    $url .= '&file='.$key;
}

header('Location:'.$url);

