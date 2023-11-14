<?php
include "cons.php";
include "DLL.php";
extract($_POST);

$validade = validacaoUsuario($nomeUsuario, $senha);
