<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
<body>
    <h1>Switch Statement</h1>

    <?php
    // 'switchstatement' is similar to 'ifstatement'
        $grade = 'A';

        switch($grade){
            case 'A' :
                echo '<h2 style="color: green">You are superstae!</h2>';
                break;

            case 'B' :
                echo '<h2 style="color: blue">You did well!</h2>';
                break;
            default;
                echo '<h2 style="color: red">You gave failed...</h2>';
        }
    ?>

</body>
</html>