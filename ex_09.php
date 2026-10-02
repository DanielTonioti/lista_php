<?php
// Exercício 09 - Verificador Matemático

function analisarNumero($numero){

    if ($numero % 2 == 0) {
        $parOuImpar = "Par";
    } else {
        $parOuImpar = "Ímpar";
    }
    $primo = "Sim";
    if ($numero < 2) {
        $primo = "Não";
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $primo = "Não";
                break;
            }
        }
    }
    $somaDivisores = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $somaDivisores += $i;
        }
    }

    if ($somaDivisores == $numero && $numero > 0) {
        $perfeito = "Sim";
    } else {
        $perfeito = "Não";
    }

    return [
        "numero" => $numero,
        "par_ou_impar" => $parOuImpar,
        "primo" => $primo,
        "perfeito" => $perfeito
    ];
}

$numero = 28;
$resultado = analisarNumero($numero);

echo "Número: " . $resultado["numero"] . "<br>";
echo "Tipo: " . $resultado["par_ou_impar"] . "<br>";
echo "É primo? " . $resultado["primo"] . "<br>";
echo "É perfeito? " . $resultado["perfeito"] . "<br>";
