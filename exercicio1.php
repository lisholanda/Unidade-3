<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 1</title>
</head>
<body>
    <form action="exercicio1.php" method="get">
        Digite o valor do Raio:
        <input type="number" name="raio"/>
        <br/><br/>
        <input type="submit" value="Calcular Raio"/>
    </form>
    <?php
    //entrada//
   $raio=$_GET["raio"];
    //processamento//
    $m_pi= 3.1415;
    $area= $m_pi *raio**2;
    $perimetro= 2*$m_pi*$raio;
    //saida//
    echo "O valor da Área" .$area."Do raio informado" .$raio; 
    echo "O valor do perímetro do raio" .$raio. "é".$perimetro; 
    ?>
</body>
</html>