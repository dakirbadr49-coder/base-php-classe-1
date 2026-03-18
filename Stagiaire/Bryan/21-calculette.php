<?php

function calculSimple($a, $b, $operateur) {

    switch ($operateur) {

        case '+':
            return $a + $b;

        case '-':
            return $a - $b;

        case '*':
            return $a * $b;

        case '/':
            if ($b == 0) {
                return "Erreur : division par zéro";
            }
            return $a / $b;

        default:
            return "Opérateur invalide";
    }
}

echo "10 + 5 = " . calculSimple(10, 5, '+') . "<br>";
echo "10 - 5 = " . calculSimple(10, 5, '-') . "<br>";
echo "10 * 5 = " . calculSimple(10, 5, '*') . "<br>";
echo "10 / 5 = " . calculSimple(10, 5, '/') . "<br>";
echo "10 / 0 = " . calculSimple(10, 0, '/') . "<br>";

?>