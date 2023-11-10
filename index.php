<?php
include "cons.php";
include "DLL.php";

echo   "
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Index</title>
    <link rel='stylesheet' href='style.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200' />
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200' />
</head>
<header class='HemogestorTitulo' id='HemogestorTituloEstoque'>
    <div class='HemogestorTitulo'>
        <span class='material-symbols-outlined'>bloodtype</span>
        <h1>Hemogestor</h1>
        <ul>
            <li><a href='./Menu.html'>Menu</a></li>
            <li><a href='./DoadorFront.html'>Doadores</a></li>
            <li><a href='./indexEstoque.php'>Estoque</a></li>
            <li><a href='./Triagem.html'>Triagem</a></li>
            <li><a href='./Relatorio.html'>Relatório</a></li>
        </ul>
    </div>
</header>
";
//echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=index_s.php'>";
mostraXML('xml');