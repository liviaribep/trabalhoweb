<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos de Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            padding: 10px;
            text-align: center;
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

    <header>
        <h1>Pedidos de Clientes</h1>
    </header>

    <div class="order-container">
        <div class="order">
            <h2>Pedido #1</h2>
            <p>Cliente: João Silva</p>
            <p>Produto: Geladeira</p>
            <p>Quantidade: 1</p>
            <p>Total: R$ 2.000,00</p>
        </div>

        <div class="order">
            <h2>Pedido #2</h2>
            <p>Cliente: Maria Oliveira</p>
            <p>Produto: Máquina de Lavar</p>
            <p>Quantidade: 2</p>
            <p>Total: R$ 3.000,00</p>
        </div>

        <div class="order">
            <h2>Pedido #3</h2>
            <p>Cliente: Pedro Santos</p>
            <p>Produto: Microondas</p>
            <p>Quantidade: 1</p>
            <p>Total: R$ 500,00</p>
        </div>
    </div>
</html>
