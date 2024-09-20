<?php

function somma($n1,$n2){
    return $n1 + $n2;
}

function lungStringa($string){
    return strlen($string);
}
function sommaElementiArray($arr = array()){
    $somma = 0;
    foreach ($arr as $num) {
        $somma = $somma + $num;
    }
    return $somma;
}
function stringMaiuscArr($arrString = array()){
    for($i = 0; $i < 4; $i++) {
        $arrString[$i] = strtoupper($arrString[$i]);
        echo"<p>".$arrString[$i]."</p>";
    }
}
function stringPalindr($stringPal){
    if(strrev($stringPal) == $stringPal){
        return true;
    }
    return false;
}
?>