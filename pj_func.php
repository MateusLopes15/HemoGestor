<?php

include "cons.php";
include "DLL.php";
extract($_POST);
$id = contar("usuario.dat");
$ano = date("Y");
$mes = date("m");
$dia = date("d");
$arq = "xml/".$ano.$mes.$dia.substr($cpf,0,3).substr($rg,0,3).$id.".xml";
//$arq = "xml/dados.xml".$id."";
$label =['nome','nomeMae', 'email','nomeSocial', 'telefone', 'cpf', 'rg','dataNascimento','sexo','tipoDoador', 'tipoSanguineo','autorizacaoComunicacao'];
XML($label,$nome,$nomeMae,$email,$nomeSocial,$telefone,$cpf,$rg,$dataNascimento,$sexo,$tipoDoador,$tipoSanguineo,$autorizacaoComunicacao,$arq);
$local = $local."DoadorFront.html";
header($local);
exit;
?>