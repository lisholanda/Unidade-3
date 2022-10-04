<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 5</title>
</head>
<body>
    <form action="exercicio5.php" method="get">
        Conversão de metros para centimetros:<br/>
        <input type="number" name="metros" placeholder="Metros"/>
        <br/><br/>
        <input type="submit" value="Converter"/>
        <?php
        $n1= $_GET["metros"];

        $divisão=$n1/100;
        echo "O resultado da conversão é:" .$divisão
        ?>
    
    </form>
    
</body>
</html>