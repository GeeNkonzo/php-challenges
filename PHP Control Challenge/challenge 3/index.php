<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> greeting system</title>
</head>
<body>

<?php

$names= array('Evan','Lunathi','Tabile','Loyiso','Sima');

$name= $names[3];

    switch ($name) {
        case 'Evan':
            echo 'Hey there Visionary Junior web dev!!';
            break;
        case 'Lunathi':
            echo 'Ubuya nini wena?!!';
            break;
        case 'Tabile':
            echo 'Hey Tabs!!';
            break;
        case 'Loyiso':
            echo 'Hello Mr Freckles!!';
            break;
         case 'Sima':
            echo 'Bonjour beautiful Vosho queen!!';
            break;
        
        default:
            echo 'unknown user';
            break;
    }

?>
    
</body>
</html>