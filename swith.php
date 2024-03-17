<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>

<body>
    <?php
    $x = 2;
    switch ($x) {
        case 1:
            echo "number 1";
            break;
        case 2:
            echo "number 2";
            break;
        case 3:
            echo "number 3";
            break;
        default:
            echo "other number";
    }
    ?>
</body>

</html>