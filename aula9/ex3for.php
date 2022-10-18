<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<!--Ler um valor N e imprimir todos os valores inteiros entre 1 (inclusive) e N (inclusive). Considere que o N será sempre maior que ZERO.-->
<body>
<form action="ex3for.php" method="get">
Digite um número:
<input type="text" name="num">
<br>
<input type="submit" value="Enviar"
<br>
</form>
<?php
if (isset($_GET["num"])) {
    $num = $_GET["num"];
    if ($num > 0) {
        for ($i=1; $i < $num ; $i++) { 
            echo $i;
        
        } else{
            echo "Considere entrar com um número positivo";
        }
    }
}



?>
    
</body>
</html>