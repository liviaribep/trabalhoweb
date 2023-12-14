<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    if($nome === "Admin" and $senha === "admin")
     header("Location: "."Siteadmin.php");
    else if($nome === "Caio" and $senha === "caio")
    header("Location: "."Siteintermediario.html");
    else 
    print("Nome/Senha inválidos");
    ?>
</body>
</html>