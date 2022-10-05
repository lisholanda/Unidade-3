<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 3</title>
</head>
<body>
    <form action="exercicio3.php" method="get">
        Digite o primeiro número:<br/>
        <input type="text" name="n1" placeholder="Digite o 1º número">
        <br/><br>
        Digite o Segundo número:<br/>
        <input type="text" name="n2" placeholder="Digite o 2º número">
        <br/><br>
        <input type="submit" value="Calcular"/>
        <br/>
        <?php
        $n1=$_GET["n1"];
        $n2=$_GET["n2"];

        $somar= $n1+$n2;
        echo "O resultado da soma é:" .$somar;


        ?>



    </form>
    
</body>
</html>