<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<!--Ler um valor inteiro (aceitar somente valores entre 1 e 10) e escrever a tabuada de 1 a 10 do valor lido.-->
<body>
    <form action="ex7.php" method="get">
    Digite um número:<br>
    <input type="number" name="num"/>
    <br>
    <input type="submit" value="Enviar">
    
    </form>
    <?php
   if(isset($_GET["num"])){
   $num=$_GET["num"];
    if(($num<0) || ($num >10)){
        echo "aceitar somento valores entre 1 e 10";
    }else {
        for ($i=0; $i <=10 ; $i++) { 
           echo $num."*".$i."=".($num*$i)."<br>";
        }
    }
    
   }
    ?>
</body>
</html>