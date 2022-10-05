<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio12.php" method="get">
        Altura x Peso Homem: <br/>
        <input type="text" name="homem" placeholder="Digite sua altura"/>
        <br/><br/>
        Altura x Peso Mulher: <br/>
        <input type="text" name="mulher" placeholder="Digite sua altura"/>
        <br/><br/>
        <input type="submit" value="Calcule"/> 
        </form>
        <?php
        //entrada//
        $n1=$_GET["homem"];
        $n2=$_GET ["mulher"];
        //processamento//
        $homem= (72.7*$n1)-58;
        $mulher= (62.1*$n2)-44.7;
        //saida//
        
        echo "Peso ideal para homem:".$homem;
        echo "<br/> Peso ideal para mulher:" .$mulher;
        
        ?>
    
</body>
</html>