<?php
include "cons.php";
include "DLL.php";
echo"<header>
<h1>Estoque de Sangue</h1>
</header>";
//echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=index_s.php'>";
mostraXMLL('xmll');
echo"
<style>
button {
    background-color: #e00000;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    </style>";

echo"<center><a href='AdEstoque.html'>
<button>Adicionar ao Estoque</button>
</a></center>";
