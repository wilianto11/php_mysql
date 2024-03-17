<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel</title>
</head>

<body>
    <?php
    $nama = "Hello Wordr";
    $angka = 123;
    echo ("contoh nama langsung menggunakan kurung() " . $nama);
    echo  "<br>";
    echo "contoh nama langsung didak pake kurung() " . $nama;
    echo  "<h2>Contoh Variabel dengan data yang diambil dari user :$nama</h2>";
    echo "<br>";
    echo "contoh menggunakan spasi" . $nama . " " . $angka;
    echo  "<hr>";
    echo "Fungsi strlen(). Fungsi strlen() digunakan untuk menentukan
    panjang string input. Contoh penggunaannya, perhatikan kode
    berikut :";
    echo strlen($nama);
    echo  "<br>";
    echo "Fungsi strpos(). Fungsi strpos() digunakan untuk mencari
    sebuah string atau karakter di dalam sekumpulan string induk, dan
    jika ditemukan, maka program akan menghasilkan sebuah nilai yang
    berupa posisi awal string yang dicari pada sekumpulan string induk.
    Sebaliknya program akan mengembalikan nilai false, jika tidak
    ditemukannya satupun string atau karakter yang sesuai. Perhatikan
    contoh berikut : (r)";
    echo strpos($nama, "r"); //cari posisi huruf o dalam variabel nama:
    echo   "<hr>";
    $d = date("D");
    if ($d == "Sun") {
        echo "Kondisi terpenuhi!";
    } else {
        echo "Kondisi tidak terpenuhi.";
    };
    echo "<br>";
    echo "Hari ini adalah hari " . $d;
    if ($d == "Fri") {
        echo "Hello!<br />";
        echo "Have a nice weekend!";
        echo "See you on Monday!";
    };
    echo "br";

    ?>
</body>

</html>