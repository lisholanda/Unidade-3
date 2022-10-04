<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 6</title>
</head>
<body>
    <form action="exercicio6.php" method="get">
     Quadrado <br/>
     <input type="number" name="quadrado" placeholder="Digite a área do quadrado"/>
     <input type="submit" value="Calcular">
     <?php
     //entrada de dados//
     $n1= $_GET["quadrado"];
     //processamento//
     $multiplicar=$n1*$n1*2;

     //saida//
     echo "O dobro desta área é:" .$multiplicar;
     ?>
    </form>
    


   

    
</body>
</html>