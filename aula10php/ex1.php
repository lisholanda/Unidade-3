<?php
$carro = array ("gol","celta","fox","corola","civic");
var_dump($carro);
echo"<br/>=============<br/>";
$carros1[]="gol";
$carros1[]="hilux";
$carros1[]="camaro";
$carros1[]="ferrari";
$carros1[]="porshe";
$carros1[]="brasilia";
var_dump($carros1);

echo"<br>===========<br>";
echo "eu tenho um " .$carros1[0];


echo"<br>===========<br>";
echo "eu tenho um " .$carros1[3];

echo "<br/><br/>";
foreach($carro as $car){
    //impresso todo o conteudo do vetor//
    echo $car. "<br>";
}





?>