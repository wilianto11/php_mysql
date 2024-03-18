<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Function</title>
</head>

<body>
    <?php
    function myname()
    {
        echo "wilianto ";
        echo "web developer";
    }
    echo "nama saya ";
    myname();

    ?>
    <br>
    <?php
    function writeMyName($fname, $punctuation)
    {
        echo $fname . "Unimal" . $punctuation . "<br />";
    }
    echo "My name is ";
    writeMyName("Risawandi", ".");
    echo "My name is ";
    writeMyName("Nurdin", "!");
    echo "My name is ";
    writeMyName("Ikhwanus", "...");
    ?>
    <br>
    <h3>POST</h3>
    <form action="form_submit.php" method="post">
        Name: <input type="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="submit" />
    </form>
    <br>
    <h3>GET</h3>
    <form action="" method="get">
        Name: <input type="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="submit" />
    </form>


</body>

</html>