<?php

include "cons.php";
include "DLL.php";

$xml = listaBolsa();
echo $xml->link->tipoSanguineo;
?>
