<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    echo "Nome: " . $nome . "<br>" . "<br>";
    echo "E-mail: " . $email;
}
?>
