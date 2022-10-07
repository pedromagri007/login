<?php

    error_reporting(0);
   ///{
   // {
    //    print_r($_POST['nome']);
   //     print_r('<br>');
   //     print_r($_POST['senha']);
   // //}
   // else
    //{
   //     echo "erro";
    //}

    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha) VALUES ('$nome','$senha')");
//}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/dashboard1.ico" type="image/x-icon">
</head>
<body>
    <section class="area-login">
        <div class="login">
            <div class="img">
            <img class="imagem" src="images/login.png" alt="" style="
            width: 80px;">
            </div>
            <form action="login.php" method="POST">
                <p>Bem Vindo</p>
                <input type="text" name="nome" placeholder="Usuário" autofocus>
                <input type="password" name="senha" placeholder="Password">
                <input type="submit" name="submit" value="Entrar">
            </form>
        </div>
    </section>
</body>
</html>