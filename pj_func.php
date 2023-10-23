<?php

include "cons.php";
include "DLL.php";
extract($_POST);
$id = contar("usuario.dat");
$arq = "xml/dados.xml".$id."";
$label =['nome','nomeMae', 'email','nomeSocial', 'telefone', 'cpf', 'rg','dataNascimento','sexo','tipoDoador', 'tipoSanguineo','autorizacaoComunicacao'];
XML($label,$nome,$nomeMae,$email,$nomeSocial,$telefone,$cpf,$rg,$dataNascimento,$sexo,$tipoDoador,$tipoSanguineo,$autorizacaoComunicacao,$arq);
$local = $local."DoadorFront.html";
header($local);
exit;
?>