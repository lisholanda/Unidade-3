<!-- Faça um programa em que o usuário informe dois números e o programa faça a soma destes números -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2</title>
</head>
<body>
    <form action="ex2.php" method="get">
        Primeiro Número:<br/>
        <input type="number" name="num1" placeholder="Digite o 1º numero"/>
        <br/><br/>
        Segundo Número:<br/>
        <input type="number" name="num2" placeholder="Digite o 2º numero"/>
        <br/><br/>
        <input type="submit" value="CALCULAR">
        <?php
        //pegar dados do formulário//
        $n1 = $_GET["num1"];
        $n2 = $_GET["num2"];

        //processamento
        $somar= $n1 + $n2;
        //saída
        echo "A soma é:" .$somar;
       ?>
       </form>
       <br/><br/>
    
       <form action="ex2.php" method="get">
       Primeiro Número:<br/>
       <input type="number" name="num1" placeholder="Digite o 1º numero"/>
       <br/><br/>
     Segundo Número:<br/>
       <input type="number" name="num2" placeholder="Digite o 2º numero"/>
       <br/><br/>
       <input type="submit" value="Calcular">
       <?php 
       $n1 =$_GET["num1"];
       $n2 =$_GET["num2"];
       
       $subtrair= $n1 - $n2;
       echo "A subtração é:" .$subtrair;

       

       
       
       ?>
</html>