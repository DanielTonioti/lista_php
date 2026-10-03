<?php


function analisarProdutos($produtos, $nomePesquisa = ""){
    $maisCaro = $produtos[0];
    $maisBarato = $produtos[0];
    $soma = 0;


    foreach ($produtos as $p) {
        if ($p["preco"] > $maisCaro["preco"]) {
            $maisCaro = $p;
        }
        if ($p["preco"] < $maisBarato["preco"]) {
            $maisBarato = $p;
        }
        $soma += $p["preco"];
    }


    $media = $soma / count($produtos);


    // Pesquisa pelo produto
    $resultadoPesquisa = "Produto não encontrado";
    foreach ($produtos as $p) {
        if (strtolower($p["nome"]) == strtolower($nomePesquisa)) {
            $resultadoPesquisa = $p["nome"] . " (R$ " . $p["preco"] . ")";
            break;
        }
    }


    return [
        "mais_caro" => $maisCaro["nome"] . " (R$ " . $maisCaro["preco"] . ")",
        "mais_barato" => $maisBarato["nome"] . " (R$ " . $maisBarato["preco"] . ")",
        "media_precos" => round($media, 2),
        "pesquisa" => $resultadoPesquisa
    ];
}


$produtos = [
    ["nome" => "Arroz", "preco" => 22.50],
    ["nome" => "Feijão", "preco" => 8.90],
    ["nome" => "Leite", "preco" => 5.20],
    ["nome" => "Café", "preco" => 16.00]
];


$resultado = analisarProdutos($produtos, "Leite");


echo "Produto mais caro: " . $resultado["mais_caro"] . "<br>";
echo "Produto mais barato: " . $resultado["mais_barato"] . "<br>";
echo "Média dos preços: R$ " . $resultado["media_precos"] . "<br>";
echo "Resultado da pesquisa: " . $resultado["pesquisa"] . "<br>";