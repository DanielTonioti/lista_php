<?php


function estatisticasNumericas($numeros){
    $soma = 0;
    $pares = 0;
    $impares = 0;


    foreach ($numeros as $num) {
        $soma += $num;
        if ($num % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }


    $total = count($numeros);
    $media = $soma / $total;
    $maior = max($numeros);
    $menor = min($numeros);
    sort($numeros);
    if ($total % 2 == 0) {
        $mediana = ($numeros[($total / 2) - 1] + $numeros[$total / 2]) / 2;
    } else {
        $meio = floor($total / 2);
        $mediana = $numeros[$meio];
    }


    return [
        "soma" => $soma,
        "media" => round($media, 2),
        "maior" => $maior,
        "menor" => $menor,
        "mediana" => $mediana,
        "pares" => $pares,
        "impares" => $impares
    ];
}


$vetor = [12, 5, 8, 20, 3, 15, 7];
$resultado = estatisticasNumericas($vetor);


echo "Soma: " . $resultado["soma"] . "<br>";
echo "Média: " . $resultado["media"] . "<br>";
echo "Maior valor: " . $resultado["maior"] . "<br>";
echo "Menor valor: " . $resultado["menor"] . "<br>";
echo "Mediana: " . $resultado["mediana"] . "<br>";
echo "Quantidade de pares: " . $resultado["pares"] . "<br>";
echo "Quantidade de ímpares: " . $resultado["impares"] . "<br>";