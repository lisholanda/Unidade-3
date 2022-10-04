<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2</title>
</head>
<body>
    <form action="exercicio2.php" method="get">
        Escolha um número:<br/>
        <input type="number" name="num1" placeholder="Digite o 1º numero"/>
        <br/><br/>
        <input type="submit" value="CALCULAR">
        <br/>
        <?php
        //pegar dados do formulário//
        $n1 = $_GET["num1"];
        //processamento
        $leia=  $n1;
        //saída
        echo "O número informado foi:" .$leia;
       ?>
       </form>



    </form>
    
</body>
</html>