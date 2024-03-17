<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping </title>

<body>
    <?php
    echo "<hr>Perulangan: while<hr>;";
    $i = 5;
    while ($i <= 10) {
        echo "number: " . $i . "<br>";
        $i++;
    }
    ?>

    <?php
    echo "<hr>Perulangan: do .... while<hr>";
    $j = 0;
    do {
        $j++;
        echo "number in loop: " . $j . "<br>";
    } while ($j < 20);
    ?>

    <?php
    echo "<hr>Perulangan:for<hr>";
    for ($k = 1; $k <= 5; $k++) {
        echo "The value of k is " . $k . "<br>";
    }
    ?>
</body>

</html>