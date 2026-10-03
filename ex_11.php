<?php
function formatarTexto($texto){
    $maiusculas = strtoupper($texto);
    $minusculas = strtolower($texto);
    $primeiraMaiuscula = ucwords(strtolower($texto));
    $quantidade = strlen($texto);


    return [
        "maiusculas" => $maiusculas,
        "minusculas" => $minusculas,
        "primeira_maiuscula" => $primeiraMaiuscula,
        "quantidade_caracteres" => $quantidade
    ];
}


$texto = "relatorio de programacao php";
$resultado = formatarTexto($texto);


echo "Texto em maiúsculas: " . $resultado["maiusculas"] . "<br>";
echo "Texto em minúsculas: " . $resultado["minusculas"] . "<br>";
echo "Primeira letra em maiúscula: " . $resultado["primeira_maiuscula"] . "<br>";
echo "Total de caracteres: " . $resultado["quantidade_caracteres"] . "<br>";


