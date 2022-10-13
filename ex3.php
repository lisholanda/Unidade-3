<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
  <form action="ex3.php" method="get">
    Primeiro Número: <br/>
    <input type="text" name="num1" >
    <br/>
    Segundo Número: <br/>
    <input type="text" name="num2" >
    <br/>
    <input type="submit" value="Calcule">
  </form>  
  <?php 
  $num1 = $_GET["num1"];
  $num2 = $_GET["num2"];

  if ($num1 == $num2) {
    echo "Números Iguais";
  }else{
    echo "Números Diferentes";
  }

?>
</body>
</html>