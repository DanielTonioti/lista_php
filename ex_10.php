<?php
// Exercício 10 - Sistema de Notas

function calcularMedia($notas){
    $maior = max($notas);
    $menor = min($notas);

    $soma = 0;
    foreach ($notas as $nota) {
        $soma += $nota;
    }

    $media = $soma / count($notas);

    // Verifica situação do aluno
    if ($media >= 7) {
        $situacao = "Aprovado";
    } else if ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return [
        "maior_nota" => $maior,
        "menor_nota" => $menor,
        "media" => round($media, 1),
        "situacao" => $situacao
    ];
}

$notas = [8.5, 6.0, 7.5, 9.0];
$resultado = calcularMedia($notas);

echo "Maior nota: " . $resultado["maior_nota"] . "<br>";
echo "Menor nota: " . $resultado["menor_nota"] . "<br>";
echo "Média: " . $resultado["media"] . "<br>";
echo "Situação: " . $resultado["situacao"] . "<br>";
