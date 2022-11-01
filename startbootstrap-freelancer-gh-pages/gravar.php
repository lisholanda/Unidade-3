<?php

// 1- resgatar dados da tela

$nome = $_GET["nome"];
$email = $_GET["email"];
$telefone = $_GET["telefone"];
$mensagem = $_GET ["mensagem"];

//2 -conectar a basa de dados

//mysqli_connect(servidor, usuario, senha,banco);
$con = mysqli_connect("localhost","root", "", "projeto1");

//3 - montar a instrução para gravar
$sql = "insert into contato values(null, '".$nome."', '".$email."', '".$telefone."','".$mensagem."')";


//4- gravar no banco
if (mysqli_query($con,$sql)) {
    $msg = "Gravado com sucesso!"; 
} else{
    echo "Erro ao gravar!";
} 

//5 - fechar conexão com banco
mysqli_close($con);
echo "<script> alert ('".$msg."');
        location.href ='index.html';
</script>";  





?>