<?php
include("conexao.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "INSERT INTO tb_agente (agt_login,agt_senha) VALUES ('$login', '$senha')";
$inserir = mysqli_query($conexao,$sql);

    echo "<script> 
    alert('Salvo com sucesso!');
    location.href='index.php';
    </script>"


?>