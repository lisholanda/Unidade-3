<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
  <form action="ex2.php" method="get">
    Seu salário: <br/>
    <input type="text" name="salario" >
    <br/>
    Gasto Total: <br/>
    <input type="text" name="gasto" >
    <br/>
    <input type="submit" value="Calcule">
  </form>  
  <?php 
  $num1 = $_GET["salario"];
  $num2 = $_GET["gasto"];

  if ($num2>$num1) {
    echo "Orçamento estourado";
  }else{
    echo "Gastos dentro do orçamento";
  }

  
?>
</body>
</html>