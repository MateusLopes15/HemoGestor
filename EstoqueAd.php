<?php

include "cons.php";
include "DLL.php";
extract($_POST);
switch ($tipoSanguineo) {

    case "A+":
        $arq = "XMLSangue/A+.xml";
        break; 
    case "A-":
        $arq = "XMLSangue/A-.xml";
        break; 
    case "B+":
         $arq = "XMLSangue/B+.xml";
        break; 
    case "B-":
        $arq = "XMLSangue/B-.xml";
        break; 
    case "AB+":
        $arq = "XMLSangue/AB+.xml";
        break; 
    case "AB-":
        $arq = "XMLSangue/AB-.xml";
        break; 
    case "O+":
        $arq = "XMLSangue/O+.xml";
        break; 
    case "O-":
        $arq = "XMLSangue/O-.xml";
        break; 

};
if(isset($aprovado) or isset($reprovado)) {
if($aprovado =="Aprovado"){
    $info = PegarValor($arq);
    $plaquetas = $info->link->plaquetas + 1;
    $hemacias = $info->link->hemacias + 1;
    $plasma = $info->link->plasma + 1;
    $crioprecipitado = $info->link->crioprecipitado + 1;
    $granulocitos = $info->link->granulocitos + 1;
    //echo $plaquetas;


    $label =['tipoSanguineo','plaquetas', 'hemacias','plasma', 'crioprecipitado', 'granulocitos'];
    XMLL($label,$tipoSanguineo,$plaquetas,$hemacias,$plasma,$crioprecipitado,$granulocitos,$arq);
    $local = $local."AdEstoque.html";

    $arqu = "TriagemXML/".$id.".xml";
    $labell =['id','tipoSanguineo','aprovado'];
    XMLLL($labell,$id,$tipoSanguineo,$aprovado,$arqu);
    header($local);
    exit;

}
elseif($reprovado == "Reprovado"){
    $arqu = "TriagemXML/".$id.".xml";
    $labell =['id','tipoSanguineo','reprovado'];
    XMLLL($labell,$id,$tipoSanguineo,$reprovado,$arqu);
    header($local);
    exit;
}
}
else{
    
$label =['tipoSanguineo','plaquetas', 'hemacias','plasma', 'crioprecipitado', 'granulocitos'];
XMLL($label,$tipoSanguineo,$plaquetas,$hemacias,$plasma,$crioprecipitado,$granulocitos,$arq);
$local = $local."AdEstoque.html";
header($local);
exit;
}
?>
