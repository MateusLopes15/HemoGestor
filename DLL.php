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

function XMLLL($label,$x1,$x2,$x3,$x4,$file){
	
  $xml = '<?xml version="1.0" encoding="utf-8"?>';
  $xml .= '<links>';
   $xml .= '<link>';
   if(isset($x1)) $xml .= '<'.$label[0].'>'. $x1 .'</'.$label[0].'>';
   if(isset($x2))$xml .= '<'.$label[1].'>'. $x2.'</'.$label[1].'>';
   if(isset($x3))$xml .= '<'.$label[2].'>'. $x3.'</'.$label[2].'>';
   if(isset($x4))$xml .= '<'.$label[3].'>'. $x4.'</'.$label[3].'>';
  

 



  //$fim = count($label) - 1;
  //$xml .= '<modo>'. $label[$fim].'</modo>';
   $xml .= '</link>';
  // Fechamento da raiz
  $xml .= '</links>';

  $fp = fopen($file, "w+");
  fwrite($fp, $xml);
  fclose($fp);
        
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

function deletarRegistro($caminhoArquivo){
  $status = unlink($caminhoArquivo);
  return $status;
}

function formularioAlterarDoador($caminhoArquivo){
  include "cons.php";
  // Listar XMLs da pasta
  if ($handle = opendir('xml')) {
    //if (false !== ($entry = readdir($handle))) {
      //if ($entry != "." && $entry != "..") {
        $ler = $caminhoArquivo;
        if ($ler != NULL){
          $xml = simplexml_load_file($ler);
          
          echo "<html class=\"Doadores\">
          <head>
              <meta charset=\"UTF-8\">
              <title>Formulário de Cadastro</title>
              <link rel='stylesheet' href='./style_vizu_doadores.css'>
              <link rel=\"stylesheet\" href=\"./style.css\">
              <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
              <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
              <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap\" rel=\"stylesheet\">
              <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\" />
              <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\" />
          </head>
          <header class=\"HemogestorTitulo\">
              <div class=\"HemogestorTitulo\">
                  <span class=\"material-symbols-outlined\">
                      bloodtype
                      </span>
                  <h1>Hemogestor</h1>
                  <ul>
                  <li><a href=\"./Menu.html\">Menu</a></li>
                  <li><a href=\"./DoadorFront.html\">Doadores</a></li>
                  <li><a href=\"./AdEstoque.html\">Estoque</a></li>
                  <li><a href=\"./Triagem.html\">Triagem</a></li>
                  <li><a href=\"./Relatório.html\">Relatório</a></li>
                  </ul>
              </div>
          </header>
          <body>
              <div class=\"formulário\">
              <center><h2>Formulário de Cadastro de Doadores</h2></center>
              <meta charset=\"UTF-8\">
              <form class=\"formulário2\" action=\"salvaAlteracaoDoador.php\" method=\"post\">
                <label for=\"registro\">Registro:</label>
                <input type=\"text\" id=\"registro\" name=\"registro\" required value=\"".substr(substr($caminhoArquivo,4),0,16)."\" readonly style= \"color:grey\"><br><br>

                  <label for=\"nome\">Nome:</label>
                  <input type=\"text\" id=\"nome\" name=\"nome\" required value=\"".$xml->link->nome."\"><br><br>
          
                  <label for=\"nomeMae\">Nome da Mãe:</label>
                  <input type=\"text\" id=\"nomeMae\" name=\"nomeMae\" required value=\"".$xml->link->nomeMae."\"><br><br>
          
                  <label for=\"email\">Email:</label>
                  <input type=\"email\" id=\"email\" name=\"email\" required value=\"".$xml->link->email."\"><br><br>
          
                  <label for=\"nomeSocial\">Nome Social:</label>
                  <input type=\"text\" id=\"nomeSocial\" name=\"nomeSocial\" value=\"".$xml->link->nomeSocial."\"><br><br>
          
                  <label for=\"telefone\">Número de Telefone:</label>
                  <input type=\"tel\" id=\"telefone\" name=\"telefone\" value=\"".$xml->link->telefone."\"><br><br>
          
                  <label for=\"cpf\">CPF:</label>
                  <input type=\"text\" id=\"cpf\" name=\"cpf\" required value=\"".$xml->link->cpf."\"><br><br>
          
                  <label for=\"rg\">RG:</label>
                  <input type=\"text\" id=\"rg\" name=\"rg\" required value=\"".$xml->link->rg."\"><br><br>
          
                  <label for=\"dataNascimento\">Data de Nascimento:</label>
                  <input type=\"date\" id=\"dataNascimento\" name=\"dataNascimento\" required value=\"".$xml->link->dataNascimento."\"><br><br>
          
                  <label>Sexo:</label>
                  <input type=\"radio\" id=\"feminino\" name=\"sexo\" value=\"Feminino\"";
                  if ($xml->link->sexo == "Feminino"){echo "checked";};
                  echo ">
                  <label for=\"feminino\">Feminino</label><br>
          
                  <input type=\"radio\" id=\"masculino\" name=\"sexo\" value=\"Masculino\"";
                  if ($xml->link->sexo == "Masculino"){echo "checked";};
                  echo ">
                  <label for=\"masculino\">Masculino</label><br><br>
          
                  <label for=\"tipoDoador\">Tipo de Doador:</label>
                  <select id=\"tipoDoador\" name=\"tipoDoador\" required>
                      <option value=\"Doador de Campanha\"";
                      if ($xml->link->tipoDoador == "Doador de Campanha"){echo "selected";};
                      echo ">Doador de Campanha</option>
                      <option value=\"Doador Esporádico\"";
                      if ($xml->link->tipoDoador == "Doador Esporádico"){echo "selected";};
                      echo ">Doador Esporádico</option>
                      <option value=\"Doador Recorrente\"";
                      if ($xml->link->tipoDoador == "Doador Recorrente"){echo "selected";};
                      echo ">Doador Recorrente</option>
                  </select><br><br>
          
                  <label for=\"tipoSanguineo\">Tipo Sanguíneo:</label>
                  <select id=\"tipoSanguineo\" name=\"tipoSanguineo\" required>
                      <option value=\"A+\"";
                      if ($xml->link->tipoSanguineo == "A+"){echo "selected";};
                      echo ">A+</option>
                      <option value=\"A-\"";
                      if ($xml->link->tipoSanguineo == "A-"){echo "selected";};
                      echo ">A-</option>
                      <option value=\"B+\"";
                      if ($xml->link->tipoSanguineo == "B+"){echo "selected";};
                      echo ">B+</option>
                      <option value=\"B-\"";
                      if ($xml->link->tipoSanguineo == "B-"){echo "selected";};
                      echo ">B-</option>
                      <option value=\"AB+\"";
                      if ($xml->link->tipoSanguineo == "AB+"){echo "selected";};
                      echo ">AB+</option>
                      <option value=\"AB-\"";
                      if ($xml->link->tipoSanguineo == "AB-"){echo "selected";};
                      echo ">AB-</option>
                      <option value=\"O+\"";
                      if ($xml->link->tipoSanguineo == "O+"){echo "selected";};
                      echo ">O+</option>
                      <option value=\"O-\"";
                      if ($xml->link->tipoSanguineo == "O-"){echo "selected";};
                      echo ">O-</option>
                  </select><br><br>
          
                  <label for=\"autorizacaoComunicacao\">Autorizar Comunicação:</label><br>
                  <input type=\"checkbox\" id=\"autorizacaoComunicacao\" name=\"autorizacaoComunicacao\" value=\"Sim\"";
                  if ($xml->link->autorizacaoComunicacao == "Sim"){echo "checked";};
                  echo ">
                  <label for=\"autorizacaoComunicacao\">Sim, autorizo a comunicação</label><br><br>
          
                  <input type=\"submit\" value=\"Enviar\">
                  
              </form>
          <center>
              <a class=\"bb\" href='index.php'>
                  <button>Visualizar Doadores</button>
              </a>
          </center>
          </div>
          </body>
          </html>
          ";
        }
      //}
    //}
  }
}

function mostraXML($folder){
  include "cons.php";
 // Listar XMLs da pasta
 if ($handle = opendir($folder)) {
   while (false !== ($entry = readdir($handle))) {
     if ($entry != "." && $entry != "..") {
       // Carregar XML usando o simplexml
       $ler = $folder . '/' . $entry;
       $idArquivo = substr($entry,0,16);
       if ($ler != NULL){
         $xml = simplexml_load_file($ler);
         //unlink($ler);
         echo "<html>
          <head>
          <link rel='stylesheet' href='./style_vizu_doadores.css'>
          <title>Informações de Cadastro</title>
          </head>";
    echo "<body>
            <div class='container'>
              <table>
                <tr>
                  <th>Nome: </th>
                  <th>D. Nascimento: </th>

                  <th>Sexo</th>
                </tr>
                <tr>
                  <td>" . $xml->link->nome . "</td>
                  <td>" . $xml->link->dataNascimento . "</td>
                  <td>" . $xml->link->sexo . "</td>
                </tr>
                <tr>
                  <th>N. Social: </th>
                  <th>Telefone: </th>
                  <th>Email: </th>
                </tr>
                <tr>
                  <td>" . $xml->link->nomeSocial . "</td>
                  <td>" . $xml->link->telefone . "</td>
                  <td>" . $xml->link->email . "</td>
                </tr>
                <tr>
                  <th>N. Mãe: </th>
                  <th>RG: </th>
                  <th>CPF: </th>
                </tr>
                <tr>
                  <td>" . $xml->link->nomeMae . "</td>
                  <td>" . $xml->link->rg . "</td>
                  <td>" . $xml->link->cpf . "</td>
                </tr>
                <tr>
                  <th>T. Doador: </th>
                  <th>T. Sanguíneo: </th>
                  <th>Autorização: </th>
                </tr>
                <tr>
                  <td>" . $xml->link->tipoDoador . "</td>
                  <td>" . $xml->link->tipoSanguineo . "</td>
                  <td>" . $xml->link->autorizacaoComunicacao . "</td>
                </tr>
                </table>
                <br>
                <center>
                <a href='deletarDoador.php?id=".$idArquivo."' class='bonito'> Deletar </a>
                <a href='alterarDoador.php?id=".$idArquivo."' class='bonito'> Alterar </a>
                </center>
                </div>
          </body>
          </html>";
        }
      }
   }
   closedir($handle); 
 }
}

function validacaoUsuario($usuario, $senha){
  $pasta = 'arquivos/usuario';
  $senhaHash = hash('sha256', $senha);

  if ($handle = opendir($pasta)) {
    while (false !== ($entry = readdir($handle))) {
      if ($entry != "." && $entry != "..") {
        // Carregar XML usando o simplexml
        $ler = $pasta . '/' . $entry;
        if ($ler != NULL){
          $xml = simplexml_load_file($ler);
          if($xml->link->nomeUsuario == $usuario && $xml->link->senha == $senhaHash){
            return "Usuario encontrado!";
          }elseif($xml->link->nomeUsuario != $usuario){
            return "Usuario nao encontrado!";
          }elseif($xml->link->nomeUsuario == $usuario && $xml->link->senha != $senhaHash){
            return "Senha inserida incorreta!";
          }else{
            return "Erro ao processar informacoes do login!";
          }
        }
      }
    }
   closedir($pasta);
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
                     
                     text-align: center;
                     padding: 20px 0;
                 }
                 h1{
                  margin : 0;
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
                     background-color: #F9F5EB;
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

function PegarValor($folder){
  include "cons.php";
  // Listar XMLs da pasta
  //if ($handle = opendir($folder)) {
    //while (false !== ($entry = readdir($handle))) {
      //if ($entry != "." && $entry != "..") {
        // Carregar XML usando o simplexml
        //$ler = $folder . '/' . $entry;
        //if ($ler != NULL){
          $xml = simplexml_load_file($folder);
          //unlink($ler);
          #$pacote = new Estoques();
          #$pacote->pla = $xml->link->plaquetas.''.$ler.'';
          #$pacote->$hem = $xml->link->hemacias.''.$ler.'';
          #$pacote->$plas = $xml->link->plasma.''.$ler.'';
          #$pacote->$cri = $xml->link->crioprecipitado.''.$ler.'';
          #$pacote->$gra = $xml->link->granulocitos.''.$ler.'';
         
          return $xml;
        }
      //}
    //}
  //closedir($handle);
  //}
//}
?>
</body>
</html>