<?php
    $conexao = mysqli_connect("localhost:3307","root","","loja");
    if(!$conexao) {
        die("Falhou! Erro: " . mysqli_connect_error());
    }
?>