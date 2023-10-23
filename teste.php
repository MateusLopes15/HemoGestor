<?php
echo"<html>
         <head>
             <title>Informações de Cadastro</title>
             <style>
                 /* Estilizando a borda vermelha */
                 .container {
                     border: 2px solid red;
                     padding: 20px;
                     width: 300px;
                     margin: 0 auto;
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
                      echo"</>";
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
        ?>