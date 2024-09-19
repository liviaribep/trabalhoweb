<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" type="text/css" href="cssentrar.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <title>CADASTRO</title>
   
</head>
<body style="font-size: 30px;background-color: rgb(33, 25, 51);color: #a9dd0c;">
    <nav> 

        <div class="menu">
        <ul style="list-style-type: none; width: 100%;">
            <li id="mensageminicial" style="font-size: 70px;"><a href="index.html" style="color: #a9dd0c;;"> INTEGR4GIRLS</li></a>
            <li class="menu" style="position: absolute; left: 585px; top: 2px;"><a href="index.html#nossostimes"> TIMES </li></a>
            <li class="menu" style="position: absolute; left: 680px; top: 2px;"><a href="calendario.html"> AGENDA </li></a>
            <li class="menu" style="position: absolute; left: 800px; top: 2px;"><a href="index.php#quemsomos2"> SOBRE </li></a>
            <li class="menu" style="position: absolute; left: 915px; top: 2px;"><a href="login.php"> DISCORD</li></a>
            <li class="menu" style="position: absolute; left: 1050px; top: 2px;"><a href="destaques.html"> DESTAQUES </li></a>
            <li class="menu" style="position: absolute; left: 1200px; top: 2px;"><a href="login.php"> ENTRAR </li></a></div>
    </nav>    

    <div class="login-container">
        <h1>Cadastro</h1>
        <form method="post">
            <input type="text" placeholder="Descrição! do produto" id="desc" name="desc" required>
            <input type="text" placeholder="Usuário" id="usuario" name="usuario" required>
            <input type="password" placeholder="Senha" id="senha" name="senha" required>
            <input type="text" placeholder="Preço" id="preco" name="preco" required>
            <button type="submit">Cadastrar</button>
        </form>
    </div>

<?php
// Configurações do banco de dados
$host = 'localhost:3307'; // ou o endereço do seu servidor MySQL
$dbname = 'cadastro';
$user = 'root'; // ou seu usuário do MySQL
$pass = ''; // ou sua senha do MySQL

// Cria uma conexão com o banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados do formulário
    $desc = $_POST['desc'];
    $fabricante = $_POST['fabricante'];
    $qtd = $_POST['qtd'];
    $preco = $_POST['preco'];

// Verificar se o usuário já existe
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM usuarios WHERE usuario = ?");
    $stmt->execute([$usuario]);
if ($stmt->fetchColumn() > 0) {
    echo 'Usuário já existe. Escolha outro nome de usuário.';
    exit;
}


    // Prepara e executa a query para inserir os dados
    $sql = "INSERT INTO usuarios (nome, usuario, senha) VALUES (:nome, :usuario, :senha)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':nome' => $nome,
            ':usuario' => $usuario,
            ':senha' => $senha
           
        ]); 
    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
    header('Location: login.php');
    exit;
}


?>

</body>
</html>