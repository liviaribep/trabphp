<?php
    include "conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: antiquewhite;
            }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
<div class="navbar">
        <a href="inicio">Início</a>
        <a href="sobre">Sobre</a>
        <a href="serviços">Serviços</a>
        <a href="contato">Contato</a>
    </div>

    <div style="padding:15px">
        <h1>Bem-vindo ao nosso site</h1>
        <p>Somos um caminho para a divulgação de produtos!</p>
    </div>

</body>
</html>

<?php
    include "conexao.php";
    $sql ="SELECT descricao, fabricante, qtd, preco_venda FROM produtos";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    echo "<br>";
    echo "<b>-- Todos os registros</b>";
    echo "<br>";
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0){
        while($registro = mysqli_fetch_assoc($resultado)){
            echo " - Nome: " . $registro["descricao"].
            " Fabricante - " . $registro["fabricante"]. " - QTD: " . $registro["qtd"]. " Preço: " . $registro["preco_venda"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado.";
    }
