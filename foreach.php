<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>

<body>
    <?php
    $arr = array("apple", "banana", "orange");
    foreach ($arr as $value) {
        echo "nama buah:" . $value . "<br>";
    }

    ?>
</body>

</html>