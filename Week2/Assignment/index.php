<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1 Back-End WebDev</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>Assignment 1</h1>
    <?php 
    if (isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['age'])) {
        $firstName = filter_input(INPUT_GET, 'firstName', FILTER_SANITIZE_SPECIAL_CHARS);   
        $lastName = filter_input(INPUT_GET, 'lastName', FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
        
        echo"Hello, my name is $firstName $lastName <br>";
        if ($age >= 18){
            echo 'I am ' . $age . ' years old and I am old enough to vote in the United States. <br>';
        }
        else {
            echo "I am $age years old and I am not old enough to vote in the United States. <br>";
        }
        echo $age . ' years is ' . $age*365 . ' days. <br>';

    } else {
        echo "Some data not set! <br>";
    }
    $date = date('m/d/y');
    echo "<br> $date"; 
    ?>
    
</body>
</html>
