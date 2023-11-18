<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Pagina Inicial </h1>
    <?php 
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    
    if($nome == "Livia" and $senha == "admin")
     header("Location: "."site.php");
    ?>
</body>
</html>


