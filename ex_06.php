<?php
function converterTemperatura($tipoOrigem, $tipoFinal, $temperatura)
{
    if ($tipoOrigem == "C") {
        $celsius = $temperatura;
    } else if ($tipoOrigem == "F") {
        $celsius = 5 / 9 * ($temperatura - 32);
    } else if ($tipoOrigem == "K") {
        $celsius = $temperatura - 273.15;
    }

    if ($tipoFinal == "C") {
        $valorFinal = $celsius;
        $simbolo = "°C";
    } else if ($tipoFinal == "F") {
        $valorFinal = ($celsius * 9 / 5) + 32;
        $simbolo = "°F";
    } else if ($tipoFinal == "K") {
        $valorFinal = $celsius + 273.15;
        $simbolo = "K";
    }

    $resultado = sprintf("Resultado: $valorFinal $simbolo");
    return $resultado;
}
echo converterTemperatura("F", "F", 30);