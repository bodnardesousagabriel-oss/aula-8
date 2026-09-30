<?php

$num1 = $_POST['num1'] ?? '';
$num2 = $_POST['num2'] ?? '';

if ($num1 !== '' && $num2 !== '') {
    
    echo "Tipos recebidos:<br>";
    var_dump($num1);
    echo "<br>";
    var_dump($num2);
    echo "<br><br>";

    
    $n1 = $num1 + 0;
    $n2 = $num2 + 0;

    echo "Tipos após conversão:<br>";
    var_dump($n1);
    echo "<br>";
    var_dump($n2);
    echo "<br><br>";

    print "A soma é: " . ($n1 + $n2);
} else {
    echo "Preencha os dois números.";
}
