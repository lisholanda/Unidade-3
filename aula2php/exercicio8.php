<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 8</title>
</head>
<body>
 <form action="exercicio8.php" method="get">
  Temperatura em Celsius: <input type="text" name="C"><br>
  <input type="submit" value="Converter">
 </form>
 
 <?php 
  $C = $_GET["C"];
  $F = (9/5)*$C + 32;  
  echo "Em Farenheit:" .$F;
 ?>

 </body>
</html>