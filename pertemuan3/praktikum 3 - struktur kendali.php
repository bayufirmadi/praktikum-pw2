<?php 	
// pengulangan
// for
// while
// do.. while
// foreach 

for ($i	=0; $i	 <5 ; $++) { 
	echo "hello word  <br>" ;
}
$u = 0;
while ($u <5	) {
	echo "heloo word";

$u++;

}
$e = 0;
do {
	echo "heloo word";

$e++;

} while ($e <5	);




 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style >
    	.warna-baris {
    		background: silver ;
    	}
    </style>
</head>
<body>
    
<table border="	1" cellpadding="10">
		<?php for ($o= 1; $o <= 5 ; $o++) { ?>
			<?php 	if ($o % 2 == 0) : ?>
				<tr class="warna-baris">
			<?php 	else : ?>
				</tr>
			<?php 	endif; ?>
			<tr>
				<?php for ($k	=1; $k <= 5; $k++ ){?>
					<td> <?php 	echo "$o, $k	"; ?></td>
				<?php 	} ?> 
			</tr>
		<?php 	} ?>
		
</table>

</body>
</html>

<?php 	
// perkodisian / percabangan
// if else
$h = 20 ;
if ($h <10 ) {
		echo "benar";
}else	{
	echo "salah";
}
//if esle if else
$p = 20 ;
if ($p <10 ) {
		echo "benar";
else if($p == 20) {
	echo "bingo!";
}
}else	{
	echo "salah";
//ternaty
//switch


 ?>