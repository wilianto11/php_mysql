<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    $names[0] = "Peter";
    $names[1] = "Quagmire";
    $names[2] = "Joe";
    echo $names[1] . " and " . $names[2] .
        " are " . $names[0] . "'s neighbors";
    ?>
    <br>
    <?php
    $ages['Peter'] = "32";
    $ages['Quagmire'] = "30";
    $ages['Joe'] = "34";
    echo "Peter is " . $ages['Peter'] . " years old.";
    ?>
    <br>
    <?php
    $famili = array(
        "grifin" => array(
            "peter",
            "lois",
            "morgan"
        ),
        "quagmire" => array(
            "maggie",
            "dean",
            "Chris"
        ),
        "brown" => array(
            "steven",
        )
    );
    echo $famili["grifin"][1] . "a part of the grifin famili?";
    ?>
</body>

</html>