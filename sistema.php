
<?php
session_start();


if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    header('Location: index.php');
}
else
{
$logado = $_SESSION['nome'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        .btn-sair{
            background-color: #FF5733;
            color: white;
            text-decoration: none;
            font-family: Arial;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Bem vindo</h1>
    <div>
        <a href="sair.php" class="btn-sair">SAIR</a>
    </div>
</body>
</html>