<?php

session_start();

if (isset($_SESSION['usuario'])) {
    echo "Bem-vindo(a), " . htmlspecialchars($_SESSION['usuario']) . "!";
} else {
    echo "Você não fez login. <a href='Exer04.html'>Fazer login</a>";
}
