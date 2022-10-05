<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 7</title>
</head>
<body>
    <form action="exercicio7.php" method="get">
        Salario: <br/>
        <input type="number" name="salario" placeholder="Salario por hora:"/>
        <br/><br/>
        Horas Trabalhadas:<br/>
        <input type="number" name="horas" placeholder="Horas Trabalhadas:"/>
        <br/><br/>
        <input type="submit" value="Calcular">
        <?php
        //pegar dados do formulario//
        $n1= $_GET["salario"];
        $n2= $_GET["horas"];
        //processamento//
        $multiplicar= $n1*$n2;
        //saida//
        echo "O salario recebido é:" .$multiplicar



        ?>
    </form>
    
</body>
</html>