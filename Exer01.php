<?php

$nome = $_GET['nome'] ?? '';
$cidade = $_GET['cidade'] ?? '';

if ($nome != '' && $cidade != '') {
    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "Cidade: " . htmlspecialchars($cidade);
} else {
    echo "Preencha todos os campos.";
}
