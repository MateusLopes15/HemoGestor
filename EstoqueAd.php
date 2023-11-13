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
if(isset($aprovado)) {
    
if($aprovado == "Aprovado"){
    
    $info = PegarValor($arq);
    $plaquetas = $info->link->plaquetas + 1;
    $hemacias = $info->link->hemacias + 1;
    $plasma = $info->link->plasma + 1;
    $crioprecipitado = $info->link->crioprecipitado + 1;
    $granulocitos = $info->link->granulocitos + 1;
    
    $label =['tipoSanguineo','plaquetas', 'hemacias','plasma', 'crioprecipitado', 'granulocitos'];
    XMLL($label,$tipoSanguineo,$plaquetas,$hemacias,$plasma,$crioprecipitado,$granulocitos,$arq);
    

    $arqu = "TriagemXML/".$id.".xml";
    $labell =['id','idoador','tipoSanguineo','aprovado'];
    XMLLL($labell,$id,$idoador,$tipoSanguineo,$aprovado,$arqu);

    $local =$local."Triagem.html";
    header($local);
    echo $local;
    exit;
}
elseif($aprovado == "Reprovado"){

    $arqu = "TriagemXML/".$id.".xml";
    $labell =['id','idoador','tipoSanguineo','aprovado'];
    XMLLL($labell,$id,$idoador,$tipoSanguineo,$aprovado,$arqu);

    $local =$local."Triagem.html";
    echo $local;
    header($local);
    /*header("Location: http://localhost/HemoGestor/Triagem.html");*/
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
