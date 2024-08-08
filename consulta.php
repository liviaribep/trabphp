<?php
    include "conexao.php";
    $sql ="SELECT id, descricao, fabricante, qtd, preco_venda";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    echo "<br>";
    echo "<b>-- Todos os registros</b>";
    echo "<br>";
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0){
        while($registro = mysqli_fetch_assoc($resultado)){
            echo "Id: " .  $registro["id"]. " - Nome: " . $registro["nome"].
            " " . $registro["senha"]. " - Email: " . $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado.";
    }
