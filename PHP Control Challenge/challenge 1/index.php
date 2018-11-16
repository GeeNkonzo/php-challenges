<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>traffic lights</title>
</head>
<body>

<?php

$light= array('green','red','yellow','blue');

    switch ($light[random_int(0,3)]) {
        case 'red':
            echo 'stop';
            break;
        case 'green':
            echo 'go';
            break;
        case 'yellow':
            echo 'slow down';
            break;
        
        default:
            echo 'treat as 4-way stop';
            break;
    }

?>
    
</body>
</html>