<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="QuestionFourAnswers.php" method="post">
        <select name="selection">
            <option value="name">What is your name?</option>
            <option value="hobby">What is your hobby?</option>
            <option value="club">What is your favourite club?</option>
        </select>
        <input type="text" name="answer">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // $answer = $_POST['answer'];
    // $selection = $_POST['selection'];

    // switch($selection) {

    //     case($selection == "name"):
    //         QuestionName();
    //         break;
        
    //     case($selection == "hobby"):
    //         QuestionHobby();
    //         break;
        
    //     case($selection == "club"):
    //         QuestionClub();
    // }



    // function QuestionName() {
    //     $answer = $_POST['answer'];
    //     echo "Your name is ".$answer;
    // }

    // function QuestionHobby() {
    //     $answer = $_POST['answer'];
    //     echo "Your hobby is ".$answer;

    // }

    // function QuestionClub() {
    //     $answer = $_POST['answer'];
    //     echo "Your favourite club is ".$answer;
    // }
    ?>
</body>
</html>