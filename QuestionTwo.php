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
        Name: <input type="text" name="name">
        IC: <input type="text" name="ic">
        Mobile: <input type="text" name="contact">
        <input type="submit" name="submit" value="Display">
    </form>
    <?php
        if (isset($_POST['submit'])) {
            displayInfo();
        } else {
            echo "Please input your info";
        }
        

        function getName() {
            $name = $_POST['name'];
            return $name;
           
        }
        function getIC() {
            $ic = $_POST['ic'];
            return $ic;
        }
        function getMobile() {
            $contact = $_POST['contact'];
            return $contact;
        }

        function displayInfo() {
            echo "Your name is " .getName() ."<br>";
            echo "Your IC is " .getIC() ."<br>";
            echo "Your phone number is " .getMobile() ."<br>";

        }
    ?>
</body>
</html>