<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 9</title>
</head>
<body>
    <form action="exercicio9.php" method="get">
    Temperatura em Farenheit: <input type="text" name="F"><br>
  <input type="submit" value="Converter"> </form>
  <?php 
  $F = $_GET["F"];
  $C = ($F-32)*5/9;  
  echo "Em Celsius: $C";
 ?>




  
</body>
</html>