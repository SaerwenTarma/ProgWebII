<?php

$fp = fopen('escritura.txt','a');

fwrite($fp, 'Hola clase, ya se durmieron');

fclose($fp);

?>