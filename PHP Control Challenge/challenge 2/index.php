<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>amusement park system</title>
</head>
<body>

<?php

$age= 18;

    switch ($age) {
        case ($age<2):
            echo 'Free entry';
            break;

        case ($age>= 2 && $age<=12):
            echo 'Entry fee: R20';
            break;

        case ($age>= 13 && $age<=17):
            echo 'Entry fee: R30';
            break;

        case ($age>= 18 && $age<=25):
            echo 'Entry fee: R40';
            break;

        case ($age>= 26 && $age<=64):
            echo 'Entry fee: R60';
            break;

        case ($age>= 65):
            echo 'Entry fee:R30';
            break;
    }

?>
    
</body>
</html>