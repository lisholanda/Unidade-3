<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 4</title>
</head>
<body>
    <form action="exercicio4.php" method="get">
        Notas<br/>
     Primeiro Nota:<br/>
        <input type="number" name="num1" placeholder="Digite a 1ª nota"/>
        <br/><br/>
     Segunda Nota:<br/>
        <input type="number" name="num2" placeholder="Digite a 2ª nota"/>
        <br/><br/>
     Terceira Nota:<br/>
        <input type="number" name="num3" placeholder="Digite a 3ª nota"/>
        <br/><br/>
        <input type="submit" value="CALCULAR">
        <?php
        //pegar dados do formulário//
        $n1 = $_GET["num1"];
        $n2 = $_GET["num2"];
        $n3 = $_GET["num3"];

        //processamento
        $somar= $n1/3+$n2/3+$n3/3;
        //saída
        echo "A Média é:" .$somar;
       ?>
      
    </form>
    
</body>
</html>