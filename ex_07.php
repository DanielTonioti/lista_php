<?php
function calcularDesconto($valorCompra)
{
    if ($valorCompra > 1000) {
        $desconto = 30 / 100;
        $valorFinal = $valorCompra - ($desconto * $valorCompra);
    } else if ($valorCompra > 500) {
        $desconto = 20 / 100;
        $valorFinal = $valorCompra - ($desconto * $valorCompra);
    } else if ($valorCompra > 100) {
        $desconto = 10 / 100;
        $valorFinal = $valorCompra - ($desconto * $valorCompra);
    } else if (100 > $valorCompra) {
        $desconto = 0;
        $valorFinal = $valorCompra;
    }
    return [
        'Valor da sua compra' => $valorCompra,
        'Valor do desconto' => $desconto,
        'Valor Final da sua compra' => $valorFinal
    ];
}
print_r(calcularDesconto(50));