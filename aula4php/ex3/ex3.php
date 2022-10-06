<?php

$idade = $_GET["idade"];
if($idade < 16){
       echo "Não Vota";
    }else if ($idade < 18) {
        echo "Opcional";
    }else if ($idade <=70) {
        echo "Voto obrigatório";   
    }else{
        echo"Opcional";
    }

   
?>