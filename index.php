
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo2</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            position: relative;
            left: -80px;
            
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        #Enviar {
            background-color: #6FAFF2;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
        }
        h2 {
            color: #6FAFF2;
            position: relative;
            bottom: 200px;
            left: 150px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 50px;
        }
    </style>
</head>
<body>
    <h2> Login </h2>
    
    <form action="validar.php" method="post">
        <label for="nome"> Nome: </label>
        <input id="nome" type="text" name="nome"> <br>
        <label for="senha"> Senha: </label>
        <input id="senha" type="password" name="senha"> <br>
        <input type="submit" id="Enviar"> <br>
    </form>    

    
    
</body>
</html>