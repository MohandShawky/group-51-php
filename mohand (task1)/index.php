<!-- 

echo and print are the same.
They are both used to output data to the screen.
The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions.
echo can take multiple parameters (although such usage is rare) while print can take one argument echo is marginally faster than print.
One major difference is that echo can take multiple parameters to output. For example: echo 'foo', 'bar'; concatenates the 2 strings, while print('foo', 'bar'); would result in a fatal error.





-->









<?php
//echo & print both are correct but echo is faster
echo "(using echo) hello world"."<br>";
print "(using print) hello world"."<br>";


//variables
$name = "mohand";
$y = 5;





define('databaseName' , 'mohand ');
echo databaseName;

$z = 'hamada';
$$z = 'hamza';

var_dump($z);

echo $$z



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body style="background-color:gainsboro;">
    <?php
        echo "<br>"."Hello $name";
    
    ?>

    <?= "<br>". "number = ".$y ?>
</body>
</html>