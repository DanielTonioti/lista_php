<?php
function analisarTexto($texto) {
    return [
        'total' => strlen($texto),
        'numeros' => preg_match_all('/[0-9]/', $texto),
        'maiusculas' => preg_match_all('/[A-Z]/', $texto),
        'minusculas' => preg_match_all('/[a-z]/', $texto),
        'especiais' => preg_match_all('/[^A-Za-z0-9]/', $texto),
        'espacos' => preg_match_all('/\s/', $texto)
    ];
}

$resultado = analisarTexto("ajsdbiuagwhier9wry8023yriwyr9823rhuwr7465843-023u8gYFUSYGIUUSUIDUIsghweoer0-258082yrh23r9her");
print_r($resultado);
