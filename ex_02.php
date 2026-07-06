<?php
function inverterTexto($texto){
    $caracteres = preg_split('//u', $texto, -1,PREG_SPLIT_NO_EMPTY);
    $caracteresInvertidos = array_reverse($caracteres);
    $textoInvertido = implode('', $caracteresInvertidos);
    $quantidadedeCaractere = mb_strlen($texto);
    return [
        "invertido" => $textoInvertido,
        "quantidade" => $quantidadedeCaractere
    ];
}
$textoUsuario = "Labubu";
$resultado = inverterTexto($textoUsuario);
echo $textoUsuario . "<br>";
echo $resultado["invertido"] . "<br>";
echo $resultado["quantidade"] . "<br>";