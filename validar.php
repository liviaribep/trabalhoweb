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
     header("Location: "."Siteprincipal.php");
    else
    header("Location "."paginainicial.php");
    ?>
</body>
</html>