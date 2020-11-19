<?php
function missatge($argument)
{
    echo "$argument<br>";
}

missatge("Aquest és l'argument que es passa en aquest exemple.");

function suma($valor1, $valor2)
{
    return ($valor1 + $valor2);
}
function subtraction($valor1, $valor2)
{
    return ($valor1 - $valor2);
}
function multiplication($valor1, $valor2)
{
    return ($valor1 * $valor2);
}
function division($valor1, $valor2)
{
    return ($valor1 / $valor2);
}
echo suma(4, 6). '<br>';
echo subtraction(4, 6). '<br>';
echo multiplication(4, 6). '<br>';
echo division(4, 6). '<br>';

$nom = 'Blanca';

echo ("La codificació md5 de $nom és:<br>");
echo md5($nom);
?>
