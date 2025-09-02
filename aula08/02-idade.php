<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
  
  $nome = isset($_GET["nome"]) ? $_GET["nome"]:"Não Informado";
  $ano = isset($_GET["ano"]) ? $_GET["ano"]:"Não Informado";
  $sexo = isset($_GET["sexo"]) ? $_GET["sexo"]:"Não Informado";
  $idade = date("Y") - $ano;


  

  echo "$nome é $sexo e tem $idade anos.";

  ?>

  <a href="02-exercicio.html">Voltar</a>
    
</body>
</html>