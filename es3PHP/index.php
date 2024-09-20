<?php include("functions.php");
    $num1 = rand(1,100);
    $num2 = rand(1,100);
    $arrNum = array();
    for($i = 0; $i < 5; $i++){
        $arrNum[$i] = rand(1,50);
    }
    $arrString = array("ciao","hello","hola","bonjour");
    echo"<p>La somma tra $num1 e $num2 e': ".somma($num1,$num2)."</p>";
    echo"<p>La lunghezza della tua parola e' di: ".lungStringa("Ciao")." caratteri</p>";
    echo"<p>La somma dei numeri del tuo array e': ".sommaElementiArray($arrNum)."</p>";
    echo"<p>".stringMaiuscArr($arrString)."</p>";
    echo"<p>".stringPalindr("AIA")."</p>";
?>