<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
  <form action="ex6.php" method="get">
    Ano de Nascimento: <br/>
    <input type="text" name="ano" >
    <br/>
    <input type="submit" value="Mostrar">
  </form>   
  <?php 
  $n1 = $_GET["ano"];

  if ($n1 = 2006) {
    echo "Pode Votar";
  }else{
    echo "Não Vota";
  }

?>
</body>
</html>