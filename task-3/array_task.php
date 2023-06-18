
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">

</head>
<body>

<?php

include "./navbar.php";

$array1 = array('apple', 'banana', 'orange', 'pear');
$array2 = array('apple', 'grape', 'orange', 'peach');


$mergedArray = array_merge($array1, $array2);

if (in_array('apple', $mergedArray)) {
  echo 'The merged array contains "apple"';
}

// elements that are in $array1 but not in $array2
$diff1 = array_diff($array1, $array2);
$diff2 = array_diff($array2, $array1);


echo 'Elements in array1 but not in array2: ';
print_r($diff1);

echo 'Elements in array2 but not in array1: ';
print_r($diff2);


$array3 = array('a' => 1, 'b' => 2, 'c' => 3);
$array4 = array('a' => 1, 'b' => 4, 'c' => 3);

$diffAssoc = array_diff_assoc($array3, $array4);

echo 'pairs that are different between array3 and array4: ';
print_r($diffAssoc);

?>

    
</body>
</html>







