<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Kevin

    $item = array('apple','pear','orange','pineapple','strawberry','blueberry','starfruit','mango');
    $bought = $item[rand(0,count($item)-1)];
    echo "Kevin buys " .$bought ." and left the store.";
    

    echo "<br>";
    echo "<br>";
    echo "<br>";

    //Arwin

    $item = array('apple','pear','orange','pineapple','strawberry','blueberry','starfruit','mango');
    echo "The shop consists of :" .implode(',',$item);
    
    
    for ($i = 0; $i < 3; $i++) {
        $randIndex = rand(0,count($item)-1);
        $spliced[$i] = $item[$randIndex];
        array_splice($item,$randIndex,1);
        
        echo "<br>";
    }
    print_r($spliced);
    echo "Arwin bought " .$spliced[0] ."," .$spliced[1] ." and " .$spliced[2];
    echo "<br>";
    echo "<br>";
    echo "Remaining fruits:".implode(',',$item);

    for ($k = 0; $k < 3; $k++) {
        $randIndex = rand(0,count($item)-1);
        $spliced[$k] = $item[$randIndex];
        array_splice($item,$randIndex,1);
        
        echo "<br>";
    }

    echo "Arwin also bought " .$spliced[0] ."," .$spliced[1] ." and " .$spliced[2];
    echo "<br>";
    echo "<br>";
    echo "Remaining fruits:".implode(',',$item);
    // $spliced = array_splice($item,$randIndex,1);
    // print_r($spliced);

    
    ?>
</body>
</html>