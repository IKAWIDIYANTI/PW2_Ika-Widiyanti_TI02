<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Belajar PHP</h1>

    <?php
    echo "Hello,PHP!";
   
    //Mendefinisikan variable menggunakan '$'
    $nama = 'Ika Widiyanti';
    $umur = 18;
    $berat = 50;


    echo "<br/>";
    echo $nama;
    echo "<br/>";
    echo $umur;
    echo "<br/>";
    echo $berat;


    echo "<hr/>";
    //mendefinisikan constant dengan define()
   echo define("phi", 3.14);

   echo "<hr/>";
   //menggunakan echo bisa dengan tanda ' ' atau tanpa tanda ' '
   echo 'Hello, PHP with echo!';
   echo "<br/>";

   //menggunakan print()
   print ('Hello, PHP with print!');
   echo "<hr/>";

    //wajib menggunakan petik " " jika menggunakan string interpolation '$'
    $nama = 'Ika Widiyanti';
    $umur = 18;
    $berat = 50;
    echo "Hallo, nama saya $nama, umur saya $umur tahun dan berat $berat kg";
    echo "<hr/>";

    //string
    $nama = 'Ika';
    echo $nama;
    echo "<br/>";
    //integer
    $umur = 18;
    echo $umur;
    echo "<br/>";
    //float
    $berat = 50.0;
    echo $berat;
    echo "<br/>";
    //Boolean
    $isRain = True;
    echo $isRain;
    echo "<br/>";
    //array
    $buah = array('mangga', 'jambu', 'anggur');
    echo $buah;
    echo "<br/>";
    //object
    class sayHello {
        function hello() {
            echo "Hello, PHP!";
        }
    }

    $obj = new SayHello;
    $obj -> hello ();

    echo "<br/>";
        //null value
        $kosong = null;
        echo $kosong;
   ?>



<?php

// Operator aritmatika 
// Penjumlahan (+)
echo 5 + 5;

// Pengurangan (-)
echo 10 - 5;

// Perkalian (*)
echo 2 * 5;

// Pembagian (/)
echo 12 / 2;

// Modulus (&)
echo 20 % 10;

// Eksponen
echo 10 ** 2;


// operator penugasan
$angka = 10;
$buah = "Mangga";


// Operator perbandingan
// Equal (==)
echo 10 == 10;

// Identical (===)
echo '10' === 10;

// Not Equal (!=) / (<>)
echo 9 != 5;
echo 9 <> 5;

// Not identical 
echo '10' !== 11;

// Lebih dari (>)
echo 5 > 10;

// Kurang dari (<)
echo 5 < 10;

// Lebih dari atau sama dengan (>=)
echo 10 >= 10;

// Kurang dari atua sama dengan (<=)
echo 7 <= 7;

// Spaceship (<=>)
echo 15 <=> 10;
echo 5 <=> 10;

// Operator Peningkatan/Penurunan
echo 5++;
echo 5--;

// Operator Logika
// and / &&
echo 5 == 5 and 5 != 5;

// or / ||
echo 5 == 5 or 5 != 5;

// xor
echo 10 == 5 xor 10 == 10;

// not
echo 100 !== 90;

// Operator String
// Concatenation (Penggabungan - '.')
echo "Ika" . "Widiyanti";

// Concatenation Asignment (Tugas Penggabungan - '.=')
$namaDepan = 'Ika';
$namaBelakang = 'Widiyanti';
echo $namaDepan .= $namaBelakang;

// Operator Tugas Bersyarat
// Operator ternary (?)
$user = 'budi';
echo $user == 'budi' ? 'silahkan masuk' : 'registrasi dulu'; 

// Operator Null coalescing (??)
 
</body>
</html>