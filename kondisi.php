<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondisi</title>
</head>

<body>
    <?php
    $d = date("D");
    if ($d == "Fri") {
        echo "<h2>Hari ini adalah : Jumat </h2>";
    }
    if ($d == "Sun") {
        echo "<h2>Hari ini adalah : Minggu </h2";
    } else {
        echo "bukan haru jumat dan saptu";
    }

    ?>

</body>

</html>