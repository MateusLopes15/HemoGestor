<?php
include "cons.php";
include "DLL.php";
extract($_POST);

$validade = validacaoUsuario($nomeUsuario, $senha);
$senhaHash = hash('sha256', $senha);
echo "<html>
        <head>
        </head>
        <body>
        ".$nomeUsuario." - ".$senha." - ".$senhaHash."
        <br>
        ";
        echo $validade;
        echo "
        </body>
    </html>
";
//mostraXML('xml');