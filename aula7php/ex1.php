<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- faça um programa para ler um número inteiro e informar se este é maior que 10-->
<body>
  <form action="">
    Digite um número:<br/>
    <input type="text" name="num" >
    <br/>
    <input type="submit" value="Calcule">
  </form>  
  <?php 
  $num = $_GET["num"];
  if ($num> 10) {
    echo "O número é maior que 10";
  }

?>
</body>
</html>