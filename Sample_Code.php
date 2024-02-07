<?php
#line comment

/*
BLOCK comment
*/

$last_name = "Jacks";
$first_name = "Jumping";
#concatenate both string variables with a space in the middle to separate the names
$full_name = $first_name." ".$last_name;

$age = 56;
$married = true;

define('PI', 3.1416);

#String variable with no length 
$description = "";
#String variable with NO value
$address = null; 

$base = 10;
$height = 5.50;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Example</title>
    </head>

    <body>
        <h1>SAMPLES</h1>
        <p>First Name: <?php echo $full_name ?></p>
        <p>Age: <?php echo $age ?></p>
        <?php 
            if ($married)
            {
                echo "You are married!!";
            }else
            {
                echo "You are NOT married";
            }
        ?>
        <p>The Value of PI: <?php echo PI ?></p>
        <?php
        if(isset($address))
        {
            echo "Variable Address has a value";
        }
        else
        {
            echo "Variable adress is null";
        }

        if (empty($description))
        {
            echo "<br>The description is empty";
        }
        else
        {
            echo "<br>The Description has a value";
        }

        
        ?>

        <p>The rectangle Area: <?php echo number_format($base*$height,2) ?></p>
    </body>
</html>
