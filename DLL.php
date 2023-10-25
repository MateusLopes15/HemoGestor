<?php
function XML($label,$x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9,$x10,$x11,$x12,$file){
	
    $xml = '<?xml version="1.0" encoding="utf-8"?>';
    $xml .= '<links>';
     $xml .= '<link>';
     if(isset($x1)) $xml .= '<'.$label[0].'>'. $x1 .'</'.$label[0].'>';
     if(isset($x2))$xml .= '<'.$label[1].'>'. $x2.'</'.$label[1].'>';
     if(isset($x3))$xml .= '<'.$label[2].'>'. $x3.'</'.$label[2].'>';
    if(isset($x4))	$xml .= '<'.$label[3].'>'. $x4.'</'.$label[3].'>';
     if(isset($x5))$xml .= '<'.$label[4].'>'. $x5.'</'.$label[4].'>';
     if(isset($x6))$xml .= '<'.$label[5].'>'. $x6.'</'.$label[5].'>';
     if(isset($x7))$xml .= '<'.$label[6].'>'. $x7.'</'.$label[6].'>';
    if(isset($x8))	$xml .= '<'.$label[7].'>'. $x8.'</'.$label[7].'>';
     if(isset($x9))$xml .= '<'.$label[8].'>'. $x9.'</'.$label[8].'>';
    if(isset($x10))	$xml .= '<'.$label[9].'>'. $x10.'</'.$label[9].'>';
    if(isset($x11))	$xml .= '<'.$label[10].'>'. $x11.'</'.$label[10].'>';
    if(isset($x12))	$xml .= '<'.$label[11].'>'. $x12.'</'.$label[11].'>';
   



    //$fim = count($label) - 1;
    //$xml .= '<modo>'. $label[$fim].'</modo>';
     $xml .= '</link>';
 // Fechamento da raiz
   $xml .= '</links>';
 
 $fp = fopen($file, "w+");
 fwrite($fp, $xml);
 fclose($fp);
         
 }
 function XMLL($label,$x1,$x2,$x3,$x4,$x5,$x6,$file){
	
  $xml = '<?xml version="1.0" encoding="utf-8"?>';
  $xml .= '<links>';
   $xml .= '<link>';
   if(isset($x1)) $xml .= '<'.$label[0].'>'. $x1 .'</'.$label[0].'>';
   if(isset($x2))$xml .= '<'.$label[1].'>'. $x2.'</'.$label[1].'>';
   if(isset($x3))$xml .= '<'.$label[2].'>'. $x3.'</'.$label[2].'>';
  if(isset($x4))	$xml .= '<'.$label[3].'>'. $x4.'</'.$label[3].'>';
   if(isset($x5))$xml .= '<'.$label[4].'>'. $x5.'</'.$label[4].'>';
   if(isset($x6))$xml .= '<'.$label[5].'>'. $x6.'</'.$label[5].'>';

 



  //$fim = count($label) - 1;
  //$xml .= '<modo>'. $label[$fim].'</modo>';
   $xml .= '</link>';
// Fechamento da raiz
 $xml .= '</links>';

$fp = fopen($file, "w+");
fwrite($fp, $xml);
fclose($fp);
       
}
function CriarXML($label,$x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9,$x10,$x11,$x12,$x13,$x14){
  $xml = '<?xml version="1.0" encoding="utf-8"?>';
  $xml .= '<links>';
   $xml .= '<link>';
   if(isset($x1)) $xml .= '<'.$label[0].'>'. $x1 .'</'.$label[0].'>';
   if(isset($x2))$xml .= '<'.$label[1].'>'. $x2.'</'.$label[1].'>';
   if(isset($x3))$xml .= '<'.$label[2].'>'. $x3.'</'.$label[2].'>';
  if(isset($x4))	$xml .= '<'.$label[3].'>'. $x4.'</'.$label[3].'>';
   if(isset($x5))$xml .= '<'.$label[4].'>'. $x5.'</'.$label[4].'>';
   if(isset($x6))$xml .= '<'.$label[5].'>'. $x6.'</'.$label[5].'>';
   if(isset($x7)) $xml .= '<'.$label[6].'>'. $x7 .'</'.$label[6].'>';
   if(isset($x8))$xml .= '<'.$label[7].'>'. $x8.'</'.$label[7].'>';
   if(isset($x9))$xml .= '<'.$label[8].'>'. $x9.'</'.$label[8].'>';
  if(isset($x10))	$xml .= '<'.$label[9].'>'. $x10.'</'.$label[9].'>';
   if(isset($x11))$xml .= '<'.$label[10].'>'. $x11.'</'.$label[10].'>';
   if(isset($x12))$xml .= '<'.$label[11].'>'. $x12.'</'.$label[11].'>';
   if(isset($x13)) $xml .= '<'.$label[12].'>'. $x13 .'</'.$label[12].'>';
   if(isset($x14))$xml .= '<'.$label[13].'>'. $x14.'</'.$label[13].'>';

  //$fim = count($label) - 1;
  //$xml .= '<modo>'. $label[$fim].'</modo>';
   $xml .= '</link>';
  // Fechamento da raiz
  $xml .= '</links>';
  return $xml;
}
function CriaArquivoXML($xml,$caminhoArquivo){
  $fp = fopen($caminhoArquivo, "w+");
  fwrite($fp, $xml);
  fclose($fp);
}
function DeletaArquivo($caminhoArquivo){
  $arquivo = fopen($caminhoArquivo, "r");
  if(isset($arquivo)){
    unlik($caminhoArquivo);
  }
}
 function contar($arq){
    $fp = fopen($arq, "r");
    $c = fgets($fp,1000);
    fclose($fp);
    $c = $c + 1;
    $fp = fopen($arq, "w");
    fwrite($fp, $c);
    fclose($fp); 
 return $c;
}

function mostraXML($folder){
  include "cons.php";
 // Listar XMLs da pasta
 if ($handle = opendir($folder)) {
   while (false !== ($entry = readdir($handle))) {
     if ($entry != "." && $entry != "..") {
       // Carregar XML usando o simplexml
       $ler = $folder . '/' . $entry;
       if ($ler != NULL){
         $xml = simplexml_load_file($ler);
         //unlink($ler);
         echo"<html>
                  <head>
                      <title>Informações de Cadastro</title>
                      <style>
                          /* Estilizando a borda vermelha */
                          .container {
                              border: 2px solid red;
                              padding: 20px;
                              width: 60%px;
                              margin: 5px;
                          }
                  
                          /* Estilizando os campos */
                          .campo {
                              margin-bottom: 10px;
                          }
                      </style>
                  </head>";
                  echo"<body>
                             <div class='container'>
                               <div class='campo'>";
                             echo "<strong> nome: </strong>".$xml->link->nome."<br/>";
                               echo "</div>";
                               echo"<div class='campo'>";
                                 echo "Mãe: ".$xml->link->nomeMae."<br/>";
                                 echo "</div>";
                                echo" <div class='campo'>";
                                 echo "email: ".$xml->link->email."<br/>";
                                 echo "</div>";
                                 echo" <div class='campo'>";
                                 echo "nomeSocial: ".$xml->link->nomeSocial."<br/>";
                                 echo "</div>";
                                 echo" <div class='campo'>"; 
                                 echo "telefone: ".$xml->link->telefone."<br/>";
                                 echo "</div>";
                                 echo" <div class='campo'>";
                                 echo "CPF: ".$xml->link->cpf."<br/>";
                                 echo "</div>";
                                 echo" <div class='campo'>"; 
                                 echo "RG: ".$xml->link->rg."<br/>";
                                 echo "</div>";
                                 echo" <div class='campo'>";
                                 echo "Data de Nascimento: ".$xml->link->dataNascimento."<br/>";
                               echo"</div>";
                               echo" <div class='campo'>";
                                 echo "sexo: ".$xml->link->sexo."<br/>";
                                 echo "</div>";
                                 echo" <div class='campo'>"; 
                                 echo "Tipo de Doador: ".$xml->link->tipoDoador."<br/>";
                                 echo "</div>";
                                 echo" <div class='campo'>";
                                 echo "Tipo Sanguíneo: ".$xml->link->tipoSanguineo."<br/>";
                                 echo "</div>";
                                 echo" <div class='campo'>";
                                 echo "Autorização: ".$xml->link->autorizacaoComunicacao."<br/>";
                                 echo "</div>";
                             echo "</div>";
                             echo "</body>";
                             echo "</html>";
        }
      }
   }
   closedir($handle); 
 }
}
function mostraXMLL($folder){
  include "cons.php";
 // Listar XMLs da pasta
 if ($handle = opendir($folder)) {
   while (false !== ($entry = readdir($handle))) {
     if ($entry != "." && $entry != "..") {
       // Carregar XML usando o simplexml
       $ler = $folder . '/' . $entry;
       if ($ler != NULL){
         $xml = simplexml_load_file($ler);
         //unlink($ler);
       echo"  <html>
         <head>
             <title>Estoque de Sangue</title>
             <style>
                 body {
                     font-family: Arial, sans-serif;
                     background-color: #f2f2f2;
                     margin: 0;
                     padding: 0;
                 }
         
                 header {
                     background-color: #ff0000;
                     color: #fff;
                     text-align: center;
                     padding: 20px 0;
                 }
         
                 h1 {
                     margin: 0;
                 }
         
                 table {
                     width: 100%;
                     border-collapse: collapse;
                 }
         
                 th, td {
                     border: 1px solid #ccc;
                     padding: 10px;
                     text-align: center;
                 }
         
                 th {
                     background-color: #eee;
                 }
         
             </style>
         </head>";
        echo"<body>
             <table>
                 <thead>
                     <tr>
                         <th>Tipo Sanguíneo</th>
                         <th>Plaquetas</th>
                         <th>Hemácias</th>
                         <th>Plasma</th>
                         <th>Crioprecipitado</th>
                         <th>Granulócitos</th>
                     </tr>
                 </thead>";
                echo" <tbody>";
                     echo"<tr>";
                        echo" <td>Tipo ".$xml->link->tipoSanguineo."</td>";
                        echo" <td>".$xml->link->plaquetas."</td>";
                        echo" <td>".$xml->link->hemacias."</td>";
                        echo" <td>".$xml->link->plasma."</td>";
                        echo" <td>".$xml->link->crioprecipitado."</td>";
                        echo" <td>".$xml->link->granulocitos."</td>";
                     echo"</tr>";
            
                 echo"</tbody>
             </table>
            
         </body>
         </html>";
       }
      }
   }
   closedir($handle);
 }
}
?>
</body>
</html>