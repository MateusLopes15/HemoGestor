<?php

include "cons.php";
include "DLL.php";
$id = $_GET['id'];
echo"

";

$status = deletarRegistro('xml/'.$id.'.xml');

if($status){
    echo "Arquivo deletado com sucesso!";
    sleep(1);

    $local =$local."index.php";
    header($local);
}else{
    echo "Falha ao deletar registro";
    $local =$local."index.php";
    header($local);
}
echo $id;

?>