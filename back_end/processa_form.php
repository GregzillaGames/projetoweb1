<?php

$nome = $_GET['nome'];
$idade = $_GET['idade'];

echo "<h1>DADOS DO USUÁRIO</h1>";
echo "Este é seu nome: $nome"."<br><br>";
echo "Este é a sua idade: $idade";

echo '<br><br><a href="http://localhost/udesc/projeto1/front_end"><button>Home Page</button></a>';
echo ' <button type="button" onClick="javascript:history.back()">Voltar</button>';
echo ' <button onClick="window.location.href=\'https:\\www.udesc.br\'">Vai para UDESC</button>';

?>