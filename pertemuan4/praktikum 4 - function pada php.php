<?php 	
// date Untuk menampilkan hari bulan dan tahun
	echo date("l, d-M-Y");
//time
//unix timestamp / EPOCH time
//sejak 1 januari 1970	
 	echo time()	;
 // menghitung hari 100 yang akan datang
 	echo date("d M Y",time()+60*60*24*100) ;

 //mktime
 // membuat sendiri detik
 // mk(0,0,0,0,0,0)
 // jam,menit,detik,bulan,tanggal,tahun
 	echo date("l", mk(0,0,0,10,18,2001));

 //strtotime
 	echo strtotime(	18 oct 2001);

 //string
 	/*strlen()
 	strcmp()
 	explode()
 	htmlspecialchars*/
 //utility
 	/*var_dump()
 	isset()
 	empty()
 	die()
 	sleep()*/

 ?>
 <?php 	
 //user-defined function
function salam($waktu ="datang",$nama ="admin") {
	return "selamat $waktu , $nama";
}
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
    <h1><?= salam("pagi","bayu"); ?></h1>
</body>
</html>

