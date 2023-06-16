<!-- 

PHP is both compiled and interpreted.
PHP is compiled down to an intermediate bytecode that is then interpreted by the runtime engine.
The PHP compiler’s job is to parse your PHP code and convert it into a form suitable for the runtime engine.
This process of compiling to bytecode and interpreting it at runtime is typical for languages that run on some kind of virtual runtime machine including Perl, Java, Ruby, Smalltalk, and others.
Interpreted languages were once significantly slower than compiled languages. But, with the development of just-in-time compilation, that gap is shrinking.

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
<body style="background-color:gray;">
    <?php
        echo "<br>"."Hello $name";
    
    ?>

    <?= "<br>". "number = ".$y ?>
</body>
</html>