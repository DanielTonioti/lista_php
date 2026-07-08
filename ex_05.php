<?php
function analisarTexto($texto) {
    $texto = trim($texto);
    
    $palavras = str_word_count($texto);
    $caracteres = strlen(str_replace(' ', '', $texto));
    $vogais = preg_match_all('/[aeiouáéíóúâêô]/i', $texto);
    $consoantes = preg_match_all('/[b-df-hj-np-tv-z]/i', $texto);
    
    return [
        'palavras' => $palavras,
        'caracteres' => $caracteres,
        'vogais' => $vogais,
        'consoantes' => $consoantes
    ];
}

$resultado = analisarTexto("ajsdbiuagwhier9wry8023yriwyr9823rhuwr7465843-023u8gYFUSYGIUUSUIDUIsghweoer0-258082yrh23r9her");
print_r($resultado);

