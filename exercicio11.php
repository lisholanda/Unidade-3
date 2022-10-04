<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 11</title>
</head>
<body>
    <form action="exercicio11.php" method="get">
        Altura x Peso: <br/>
        <input type="text" name="altura" placeholder="Digite sua altura"/>
        <br/><br/>
        <input type="submit" value="Calcule"/> 
        </form>
        <?php
        //entrada//
        $n1=$_GET["altura"];
        //processamento//
        $calculo= 62*$n1-58;
        //saida//
        echo "Seu peso ideal seria:" .$calculo;
        
        ?>
    
</body>
</html>