<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 10</title>
</head>
<body>
    <form action="exercicio10.php" method="get">
     Digite o 1º número: </br>
     <input type="number" name="n1" placeholder="Digite o 1º número">
     <br/><br/>
     Digite o 2º número: </br>
     <input type="number" name="n2" placeholder="Digite o 2º número">
     <br/><br/>
     Digite o 1º número: </br>
     <input type="text" name="n3" placeholder="Digite o 3º número">
     <br/><br/>
     <input type="submit" value="Calcular"/>
    </form>
    <br/><br/>
    <?php
    //entrada//
    $n1=$_GET["n1"];
    $n2=$_GET["n2"];
    $n3=$_GET["n3"];
    //processamento//
    $calcule= 2*$n1+2/$n2;
    $calcular= 3*$n1+$n3;
    $multiplicar= $n3**3;
    //saida//
    echo "O produto do primeiro com metade do segundo:" .$calcule;
    echo "<br/>A soma do triplo do primeiro com o terceiro:" .$calcular;
    echo "<br/> O terceiro elevado ao cubo:" .$multiplicar;
    
    ?>

</body>
</html>