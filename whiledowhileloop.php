<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While do While Loop</title>
</head>
<body>
    <h1>While Loop</h1>

    <?php
        $grade = 0;
        // infinite loop
        // while($grade < 10){
        //    echo '<p>I am less than 10!</p>';
        // }
        // pre-condition loop
        while($grade < 10){
            echo '<p>I am less than 10!</p>';
            $grade++;
        }

        echo '<p>Exit Loop</p>';

    ?>

    <h1>Do-while Loop</h1>
    <?php
        // post-condition loop
        $grade = 0;
        do{
            echo '<p>I am do while loop!</p>';
        }while($grade < 10);


    ?>
    
</body>
</html>