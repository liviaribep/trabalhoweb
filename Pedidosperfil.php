<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="csstrabalhocarlos.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }


        .order-container {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .order {
            background-color: white;
            border: 1px solid #ddd;
            padding: 20px;
            margin: 10px;
            max-width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2,h1{
            color:#6FAFF2;
        }

    </style>
</head>
<body>

<a href="siteintermediario.html"><img id="logo" src="logoeletros.jpeg" style="width: 89px;"> </a>
    <p id="logo2" style="font-size: 60px; color: #6FAFF2; display: block;"> ELETROS-STORE </p>
    <ul class="menu">
        <li><a href="Siteadmin.php"><b>HOME</b></a></li>
        <li><a href="Produtos.php"><b>PRODUTOS</b></a></li>
        <li><a href="Pedidos.php"><b>PEDIDOS</b></a></li>
        <li><a href="Config.php"><b>CONFIGURAÇÕES</b></a></li>
        <li><a href="Clientes.php"><b>CONTATO</b></a></li>
    </ul>


 
        <h1 style="left: 40%; top: 20px; color: rgb(9, 45, 83); ">Pedidos de Clientes</h1>
   

    <div class="order-container">
        <div class="order">
            <h2>Pedido #1</h2>
            <p>Cliente: João Silva</p>
            <p>Produto: Geladeira</p>
            <p>Quantidade: 1</p>
            <p>Total: R$ 3.299,90</p>
        </div>

        <div class="order">
            <h2>Pedido #2</h2>
            <p>Cliente: Maria Oliveira</p>
            <p>Produto: Máquina de Lavar</p>
            <p>Quantidade: 2</p>
            <p>Total: R$ 9.599,90</p>
        </div>

        <div class="order">
            <h2>Pedido #3</h2>
            <p>Cliente: Pedro Santos</p>
            <p>Produto: Batedeira</p>
            <p>Quantidade: 1</p>
            <p>Total: R$ 500,00</p>
        </div>
    </div>
</body>
</html>