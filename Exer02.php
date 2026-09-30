<?php

$nome = $_POST['nome'] ?? '';
$cidade = $_POST['cidade'] ?? '';

if ($nome != '' && $cidade != '') {
    echo "Bem-vindo(a), " . htmlspecialchars($nome) . "!<br>";
    echo "Cidade: " . htmlspecialchars($cidade) . "<br>";

    if ($cidade == "Curitiba") {
        echo "Curitibano!";
    }
} else {
    echo "Preencha todos os campos.";
}
