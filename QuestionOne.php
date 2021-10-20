<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <select name="selection">
            <option value="halfStar">Half-Star</option>
            <option value="fullStar">Full-Star</option>
        </select>
        <input name="submit" type="submit" value="Submit">

    </form>
    <?php
    
            if ($_POST['selection'] == "halfStar") {
                
                halfStar();
            } elseif ($_POST["selection"] == "fullStar") {
                fullStar();
            }
        
            
            
          

    
    
    
    function halfStar() {
        for($i = 1; $i <=5; $i++) {
   
            for ($j = 0; $j < $i ; $j++) {
                echo "*";
                
            }
            echo "<br>";
         }
    }


    function fullStar() {
        for($i = 1; $i <=5; $i++) {
   
            for ($j = 0; $j < $i ; $j++) {
                echo "*";
                
            }
            echo "<br>";
         }
        for($i = 1 ;$i <=5; $i++) {
  
            for ($j = 1; $j <= 6-$i ; $j++) {
                echo "*";
            }
            echo "<br>";
    }
}
    ?>
</body>
</html>