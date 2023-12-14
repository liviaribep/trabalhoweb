<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações do Administrador</title>
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
            color: white;
            text-align: center;
        }

        section {
            padding: 20px;
        }


        .settings-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .settings-form label {
            display: block;
            margin-bottom: 10px;
        }

        .settings-form input, .settings-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .settings-form button {
            background-color: #6FAFF2;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .settings-form button:hover {
            background-color: #666;
        }
    </style>
</head>
<body>

    <header>
        <h1>Configurações do Administrador</h1>
    </header>

    <section>
        <div class="settings-form">
            <label for="paymentMethods">Métodos de Pagamento:</label>
            <input type="text" id="paymentMethods" name="paymentMethods" value="Cartão de Crédito, Débito, PIX">

            <label for="taxRate">Taxa de Imposto:</label>
            <input type="text" id="taxRate" name="taxRate" value="10%">

            <button type="submit">Salvar Configurações</button>
        </div>
    </section>

</bo
