<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "Nome: " . ($_POST['nome']) . "<br>";
}

if (isset($_GET['nome'])) {
    echo "Método GET: " . ($_GET['nome']) . "<br>";
}

echo "O método foi: " . $_SERVER["REQUEST_METHOD"];
?>
