<?php
include "cons.php";
include "DLL.php";

echo"<!DOCTYPE html>
<html class='Doadores'>
<head>
    <meta charset='UTF-8'>
    <title>Doadores</title>
    <link rel='stylesheet' href='./style.css'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200' />
    
<header class='HemogestorTitulo'>
    <div class='HemogestorTitulo'>
        <span class='material-symbols-outlined'>
            bloodtype
            </span>
        <h1>HemoGestor</h1>
        <ul>
        <li><a href='./Menu.html'>Home</a></li>
        <li><a href='./DoadorFront.html'>Doadores</a></li>
        <li><a href='./indexEstoque.php'>Estoque</a></li>
        <li><a href='./Triagem.html'>Triagem</a></li>
        <li><a href='./Relatorio.html'>Relatório</a></li>
        </ul>
    </div>
</header>

<body>
<h1>Teste</h1>
<br>
<br></body>";
//echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=index_s.php'>";
mostraXML('xml');