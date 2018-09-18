<?php 
include('conexao.php');
$id = $_GET['id'];

$sql = "DELETE FROM tb_agente WHERE agt_id = $id";

$excluir = mysqli_query($conexao,$sql);
echo "<script> 
    alert('Deletado com sucesso!');
    location.href='index.php';
    </script>"

?>