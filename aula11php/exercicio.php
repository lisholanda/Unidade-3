<?php
//peça para o usuario digitar o nome e a nota final de 7 alunos. exiba a média da turma e quais possuem notas acima da média e quais estão abaixo da média//

$nome = array("aluno1", "aluno2","aluno3","aluno4","aluno5","aluno6","aluno7",);
$nota = array (10,9,8,7,6,5,4);

$media=0;
$soma=0;
$contador=0;

foreach ($nota as $n){
    //$soma  $soma + $n;
    $contador++;
    $soma += $n;


}
echo "<br>A soma das notas é:" .$soma;
echo "<br>A quantidade de alunos é:" .$contador;
$media = $soma/$contador;
echo "<br> A média da turma é:" .$media;


foreach ($nota as $chave => $nota) {
    if($nota >=$media){
        echo "<br> O aluno" .$nome[$chave]. "teve nota acima da média" .$nota. "<br>";
    
    }else{
        echo "<br> O aluno" .$nome[$chave]. "teve nota abaixo da média" .$nota."<br>";
    }


}
?>