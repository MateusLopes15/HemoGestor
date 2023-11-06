<?php

include "cons.php";
include "DLL.php";
$id = $_GET['id'];

$status = deletarRegistro('xml/dados.xml'. $id);

if($status){
    echo "Arquivo deletado com sucesso!";
}else{
    echo "Falha ao deletar registro";
}
echo $id;
?>