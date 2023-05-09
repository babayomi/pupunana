<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statement</title>
</head>
<body>
<h1>Switch Statement</h1>
    <?php

    //an 'if statement that will carry out an action based on the value of the variable.
    echo '<h2>If Statement</h2>';

    $grade =50;
    // ==, >, <, <=, >=,
    if($grade >= 50){
        echo '<h3 style="color: green">You have passed</h3>';
    }
    else{
        echo '<h3 style="color: red">You have failed</h3>';
    }

    $grade = 'A';
    // if-Else IF-Else
    if($grade == 'A'){
        echo '<h2>You are a superstar!</h2>';
    }
    elseif ($grade == 'B'){
        echo '<h2 style="color: blue">You did well!</h2>';
    }
    else {
        echo '<h2>You have failed!</h2>';
    }

    ?>

</body>
</html>