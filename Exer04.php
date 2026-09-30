<?php

session_start();

$usuario = $_POST['usuario'] ?? '';

if ($usuario != '') {
    $_SESSION['usuario'] = $usuario;
    header("Location: Exer04_boasvindas.php");
    exit;
} else {
    echo "Informe o nome de usuário. <a href='Exer04.html'>Voltar</a>";
}
