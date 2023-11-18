
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo2</title>

    <style>

        form{
            background-color: lightblue;
            padding: 10px;
            margin: 5px;
            width: 30%;
            height: 150px;
            position: relative;
            left: 460px;
        }

        label,input{
            padding: 6px;
            margin: 3px;
            text-align: center;
            position: relative;
            top: 30px;
            left: 40px;
        }


</style>
</head>
<body>
    <h2> exemplo </h2>
    <?php
        $x = 5;
        $y = 4;
        echo "x= ".$x;
        echo "<br> y= ".$y;
        echo "<br> x + y = ".$x + $y;
    ?>    
    <h2> formularios </h2>
    <form action="index.php" method="post">
        <label for="nome"> Nome: </label>
        <input id="nome" type="text" name="nome"> <br>
        <label for="senha"> Senha: </label>
        <input id="senha" type="password" name="senha"> <br>
        <input type="submit"> <br>
        
    </form>    
</body>
</html>