<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $senha = $_POST['senha'];

    echo $senha . "<br>" . "<br>";
}

    if (strlen($senha) >= 8) {
        echo "Sua senha tem mais de 8 caractéres.";
    } else {
        echo "Sua senha não tem mais de 8 caractéres."; }

?>