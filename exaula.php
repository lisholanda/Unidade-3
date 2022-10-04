<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>
<body>
    <form action="exaula.php" method="get">
        Digite sua data de nascimento: <br/>
        <input type="text" name="nascimento"/>
        <br/>
        <input type="submit" value="Calcular Idade"/>
    </form>
    <?php
    $data= $_GET["nascimento"];

    $calculo= 2022-$data;
    echo "Sua idade é:" .$calculo;



?>
    
</body>
</html>