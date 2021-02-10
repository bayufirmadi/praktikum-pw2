<?php 	
//Array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh tipe data berbeda
//pasangan key dan value
//key adalan istilan undex,yang di mulai dati 0

//cara lama
$hari = array("senin","selasa","rabu");
//cara baru
$bulan = ["januari","febuarui","maret"];
$arrl = [134, "sama", 34];

// cara menampil kan array
var_dump($hati);
echo "<br>";
print_r($bulan);
echo "<br>";
//menampilkan satu elemen pada Array 
echo $arrl[1];
 //menambahkan elemen baru pada array
var_dump($hari);
$hari[] ="kamis";
var_dump($hari);

 ?>

 <?php 	
 //melakukan pengulangan dapa arry
 // for/ foreach
 $angka = [3,5,11,17,25,27]

  ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style >
    	div {
    		width: 	50px;
    		height: 50px;
    		background-color: salmon;
    		text-align: 	center;	
    		line-height: 	50px;
    		margin: 	3px;
    		float: 	left;	
    	}
    </style>
</head>
<body>

<?php for ($i = 0; $i < count($angka); $i ++) { ?>
		<div><?php 	echo $angka[$i]; ?>	</div>
<?php 	} ?>

<div class="clear">	</div>

<?php foreach ($angka as $a ) { ?>
	<div> <?php echo $a ?>	</div>
<?php 	}  ?>

<div class="clear">	</div>

</body>
</html>

<?php 
//array multi fungsi	
$mahasiswa =["bayu firmadi","02244344","sistem informasi","bayufirmadi18@gmail.com"],["tedi firmansah","02244245","sistem informasi","teddi111@gmail.com"]

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
    
<h1>daptar mahasiswa</h1>

<ul>
	<?php 	foreach ($mahasiswa	 as $mhs ) : ?>
		<li>nama : <?= $mhs[0]; ?></li>
		<li>NRP : <?= $mhs[1]; ?></li>
		<li>Jurusan : <?= $mhs[2]; ?></li>
		<li>Email : <?= $mhs[3]; ?></li>
	<?php 	endforeach; ?>
</ul>



</body>
</html>