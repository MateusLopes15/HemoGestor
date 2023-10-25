<?php
include "DLL.php";

extract($_POST);
$caminhoArquivo = 'arquivos/doador/dadosDoador'.$id.'.xml';
deletaArquivo($caminhoArquivo);
?>