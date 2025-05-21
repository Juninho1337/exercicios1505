<?php
session_start();
$_SESSION["email"] = $_POST['email'];
$_SESSION["senha"] = $_POST['senha'];
$email = $_SESSION["email"] ;
$senha =$_SESSION["senha"];
if ($email == "juninhotech@gmail.com" && $senha == "1234") {
    echo "Seu login foi efetuado com sucesso!<br>";
    echo "Você esta logado como: ". $email ."<br>";    
} else {
    echo "E-mail ou senha invalida!<br>"; 
    echo "Falha no login!<br>";
    echo "<a href='index.php'>login</a>";
    session_destroy();    
}

?>