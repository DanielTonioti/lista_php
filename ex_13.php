<?php


function criptografarMensagem($texto, $deslocamento = 3){
    $resultado = "";


    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = $texto[$i];
        $codigo = ord($letra);
        if ($codigo >= 65 && $codigo <= 90) {
            $novoCodigo = (($codigo - 65 + $deslocamento) % 26) + 65;
            $resultado .= chr($novoCodigo);
        }
        else if ($codigo >= 97 && $codigo <= 122) {
            $novoCodigo = (($codigo - 97 + $deslocamento) % 26) + 97;
            $resultado .= chr($novoCodigo);
        }
        else {
            $resultado .= $letra;
        }
    }


    return $resultado;
}


function descriptografarMensagem($texto, $deslocamento = 3){
    $resultado = "";


    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = $texto[$i];
        $codigo = ord($letra);
        if ($codigo >= 65 && $codigo <= 90) {
            $novoCodigo = (($codigo - 65 - $deslocamento + 26) % 26) + 65;
            $resultado .= chr($novoCodigo);
        }

        else if ($codigo >= 97 && $codigo <= 122) {
            $novoCodigo = (($codigo - 97 - $deslocamento + 26) % 26) + 97;
            $resultado .= chr($novoCodigo);
        }
         else {
            $resultado .= $letra;
        }
    }


    return $resultado;
}


$mensagem = "AULA DE PHP NO SENAI";
$cripto = criptografarMensagem($mensagem);
$descripto = descriptografarMensagem($cripto);


echo "Mensagem original: " . $mensagem . "<br>";
echo "Mensagem criptografada: " . $cripto . "<br>";
echo "Mensagem descriptografada: " . $descripto . "<br>";