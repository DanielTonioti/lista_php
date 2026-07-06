<?php
function mascararCpf($cpf){
 $tamanho = mb_strlen($cpf);
 $resultado = str_repeat('*', $tamanho);
 return $resultado;    
    
}
$cpfnumero = "9999999999999";
$mascarado = mascararCpf($cpfnumero);
echo $cpfnumero . "<br>";
echo $mascarado;