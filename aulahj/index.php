<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="salvar.php" method="POST">
    <input type="text" name="login" placeholder="Login" id=""  >
    <input type="password" placeholder="Senha" name="senha" id="">
    <input type="submit" value="Inserir">
    
    </form>

    <?php
    include("conexao.php");
    $sql = "SELECT * FROM tb_agente order by agt_id asc";
    echo"<table>
    <tr><td bgcolor='GreenYellow'>  <b> Usuário</b> </td>
    <td bgcolor='GreenYellow'>  <b> Senha</b> </td>
    <td bgcolor='GreenYellow'>  <b> Excluir</b> </td>
    <td bgcolor='GreenYellow'>  <b> Editar</b> </td></tr>
    
    ";


    $pesquisar = mysqli_query($conexao,$sql);
    while ($linha = $pesquisar->fetch_assoc()) {
        echo "<tr>
        <td>".$linha['agt_login']."</td>
        <td>".$linha['agt_senha']."</td>
        <td><a href='excluir.php?id=".$linha['agt_id']."'><img src='img/icon.png'></a></td>
        <td><a href='index.php?id=".$linha['agt_id']."'><img src='img/icona.png'></a></td>";
    } 
    
    
    
    ?>
</body>
</html>