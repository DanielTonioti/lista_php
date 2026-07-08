<?php
function ordenarNomes($ordem){
    $nomesVetor = explode(",", $ordem);
    sort($nomesVetor);
    return $nomesVetor;
}
print_r (ordenarNomes("Gabriel,Daniel,Skibidi Tonioti,Grrr"));