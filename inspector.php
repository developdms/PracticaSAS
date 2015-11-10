<?php

require './clases/AutoCarga.php';
$imagen = Request::get('imagen');

$files = scandir('../../carpetaimagenes/'.$imagen);

foreach ($files as $value) {
    if ($value != '.' && $value != '..') {
        if (is_dir('../../carpetaimagenes/'.$imagen.'/'.$value)) {
            echo "<a href='?imagen=$imagen/$value'>$value</p>";
        } else {
            echo "<a href='visor.php?imagen=$imagen/$value'>$value</p>";
        }
    }
}

?>