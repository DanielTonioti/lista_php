<?php
// (x² + y²)/(x+y)
function calcularFormula($x,$y){
 if(($x+$y)== 0){
    return "não é possivel dividir por 0";
 }
    $resultado = (pow($x,2)+pow($y,2))/($x+$y);
    return $resultado;
 }
 $x = 10;
 $y = 5;
 echo "O valor de X: $x <br>";
  echo "O valor de Y: $y <br>";
   echo "Resultado " . calcularFormula($x,$y);