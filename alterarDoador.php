<?php
include "cons.php";
include "DLL.php";
$id = $_GET['id'];

$status = formularioAlterarDoador('xml/'.$id.'.xml');
?>
