<?php

include "cons.php";
include "DLL.php";
extract($_POST);
$id = contar("usuario.dat");
$arq = "xmll/dados.xml".$id."";
$label =['tipoSanguineo','plaquetas', 'hemacias','plasma', 'crioprecipitado', 'granulocitos'];
XMLL($label,$tipoSanguineo,$plaquetas,$hemacias,$plasma,$crioprecipitado,$granulocitos,$arq);
$local = $local."AdEstoque.html";
header($local);
exit;
?>