<?php

$contenido = file_get_contents('https://www.php.net/manual/es/wrappers.php');

file_put_contents('wrappers.php',$contenido);



?>