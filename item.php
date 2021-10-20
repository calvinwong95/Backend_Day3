<?php

include "display.php";

function kevin($item) {
    
    $bought = $item[rand(0,count($item)-1)];
    $kevinSays = "Kevin buys " .$bought ." and left the store. <br>";
    display($kevinSays);
}

function arwin($item) {
    
    $shopList = "The shop consists of :" .implode(',',$item)."<br>";
    display($shopList);
    
    for ($i = 0; $i < 3; $i++) {
        $randIndex = rand(0,count($item)-1);
        $spliced[$i] = $item[$randIndex];
        array_splice($item,$randIndex,1);
        
    }

    $arwinSays = "Arwin bought " .$spliced[0] ."," .$spliced[1] ." and " .$spliced[2];
    display($arwinSays);
    echo "<br>";
    echo "<br>";
    $remainingFirst = "Remaining fruits:".implode(',',$item);
    display($remainingFirst);

    for ($k = 0; $k < 3; $k++) {
        $randIndex = rand(0,count($item)-1);
        $spliced[$k] = $item[$randIndex];
        array_splice($item,$randIndex,1);
        
        echo "<br>";
    }

    $arwinSaysTwo = "Arwin also bought " .$spliced[0] ."," .$spliced[1] ." and " .$spliced[2];
    display($arwinSaysTwo);
    echo "<br>";
    echo "<br>";
    $remainingSecond = "Remaining fruits:".implode(',',$item);
    display($remainingSecond);
}


?>