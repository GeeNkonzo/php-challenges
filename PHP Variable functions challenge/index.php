<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>arrays challenge</title>
    
<body>
<?php
    $name = "  Bob  ";

    $age = "thirty five";

    $job = "plumber";

    $carMake = " Toyota";

    $carColour = "RED";

    $happy = true;

    $time = "this many";

    $car = array('carMake'=>'Toyota','carColour'=>'Red');


    $break = "<br>";

    $retirement = 65 - 35;

    echo trim($name) . $break;
    echo str_replace("thirty five", "35", $age) . $break;
    echo strtolower($carColour) . $break;
    echo strlen($time) . $break . $break;
    echo $name . " is a " . $job .".He drives a " . $car['carMake'] . " and works " .strlen($time) . " hours a day. He is ". str_replace("thirty five", "35", $age). " years old and is ". $retirement. " years from retirement. He is happy with his life."
    


?> 

</body>
</html>