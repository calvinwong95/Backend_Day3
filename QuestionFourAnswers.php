<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="QuestionFour.php" method="post">
    <input type="submit" name="submit" value="Back">
</form>
<?php


$answer = $_POST['answer'];
$selection = $_POST['selection'];

switch($selection) {

    case($selection == "name"):
        QuestionName();
        break;
    
    case($selection == "hobby"):
        QuestionHobby();
        break;
    
    case($selection == "club"):
        QuestionClub();
}



function QuestionName() {
    $answer = $_POST['answer'];
    echo "Your name is ".$answer;
}

function QuestionHobby() {
    $answer = $_POST['answer'];
    echo "Your hobby is ".$answer;

}

function QuestionClub() {
    $answer = $_POST['answer'];
    echo "Your favourite club is ".$answer;
}
?>


</body>
</html>

