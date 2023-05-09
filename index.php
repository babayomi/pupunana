<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pupunana</title>
</head>
<body>

    <h2>Apply for Bootcamp</h2>
    <ul>
        <li><a href="array.php">Simple Array and Printouts</a></li>
        <li><a href="forloop.php">Simple for loop</a></li>
        <li><a href="dowhyloop.php">Simple do while</a></li>
        <li><a href="whiledowhileloop.php">Simple while Do While loop</a></li>
        <li><a href="ifstatement.php">Simple if statement</a></li>
        <li><a href="switchstatement.php">Simple Switch Statement</a></li>
    </ul>


    <!-- basic HTML -->
    <h1>How are you doing</h1>

    <?php 
        echo 'What are you doing';
        echo '<br/>';
        echo 'second line';
    ?>


    <?php 
        // declare variable
        $name = 'Abayomi Ogundipe';
        $age = 21;
        echo '<br/>';
        // echo variable
        echo $name;
        // declare variable inside static content
        echo '<h1>My name is: '.$name.' </h1>';
        echo '<h1>My age is: '.$age.' </h1>';
    ?>



</body>
</html>