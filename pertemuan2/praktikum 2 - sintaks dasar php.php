<?php 	
// pertemuan 2 - PHP Dasar
// Sintaks php

// standar Output
/*echo, print
print_r
var _dump
*/

echo "bayu firmadi";

// penilisan sintak php
// 1. php di dalam HTML
// 2. HTML dalam PHP


// variabel dan tipe data
// variable
$nama = "bayu";

//operator
// aritmatika 
$x= 10;
$y= 20;

echo $x +$y;
// concat
// .
$nama_depan = "bayu" ;
$nama_belakang = "firmadi";
echo $nama_depan." ".$nama_belakang ;

//assigment
//=,+=,-=,*=,/=,%=,.=
$t = 1;
$t += ;
echo $t ;

//perbandingan
// <,>,<=,>=,==,!=
var_dump(1 =="1");

//identitas
//===,!==
var_dump(1 ==="1");

//logika
// &&,||,!
$u = 30;
var_dump($u <20 || $u 2== 0	);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>halo , selamat datang <?php echo $nama; ?>  </h1>
    <p><?php echo"ini paragraf"; ?></p>
</body>
</html>