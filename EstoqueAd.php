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
$label =['tipoSanguineo','plaquetas', 'hemacias','plasma', 'crioprecipitado', 'granulocitos'];
XMLL($label,$tipoSanguineo,$plaquetas,$hemacias,$plasma,$crioprecipitado,$granulocitos,$arq);
$local = $local."AdEstoque.html";
header($local);
exit;

?>
