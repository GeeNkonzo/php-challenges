<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>challenge-2</title> 
</head>
<body>

    <h1>Task 1</h1>

    <?php

        $space= "<br>";
        $fruitNVeg = array('mango','avocado','butternut','grapes','banana');

        // Number 1

        echo $fruitNVeg[0] . $space;
        echo end($fruitNVeg);

        // var_dump($fruitNVeg);

        // Number 2

        array_shift($fruitNVeg);
        array_push($fruitNVeg, 'watermelon');

        // var_dump($fruitNVeg);

        echo $space . $space;

        // Number 3

        echo $fruitNVeg[0];
        // echo end($fruitNVeg);


        echo $space . $space;
        
        // Number 4

        $replace = array('strawberry', 'spinach', 'tomato');

        array_splice($fruitNVeg,2,1,$replace);
        // var_dump($fruitNVeg);

        // Number 5
        sort($fruitNVeg);

        // Number 6

        echo implode(",", $fruitNVeg);
        echo $space . $space;
        

        
    ?> 

    <hr>

    <h1>Task 2</h1>

    <?php

        $old = array('height'=> 152, 'age'=> 20, 'shoeSize'=> 4);

        $newHeight = $old['height'] + 10;

        echo "New height: " . $newHeight;
        echo $space . $space;

        $youth = $old['age'] - 2;
        echo "New age: " . $youth;
    ?>
    
    <hr>

    <h1>Task 3</h1>

    <?php
        $evan = array('height'=> 165, 'age'=> 21, 'shoeSize'=> 7);
        $tabile = array('height'=> 174, 'age'=> 22, 'shoeSize'=> 8);
        $class = array($old,$evan,$tabile);

        // var_dump($class);

        echo "Height: " . $class[0]['height'] . $space;
        echo "Age: " . $class[1]['age'] . $space;
        echo "Shoesize: " . $class[2]['shoeSize'] . $space;

        echo $space . $space;

        $class[0]['height'] = 120;
        $class[0]['age'] = 16;
        $class[0]['shoeSize'] = 5;

        echo "Height: " . $class[0]['height'] . $space;
        echo "Age: " . $class[0]['age'] . $space;
        echo "Shoesize: " . $class[0]['shoeSize'] . $space;


    ?>



</body>
</html>