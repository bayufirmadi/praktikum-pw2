<?php 
    require_once('koneksi.php'); 

    $query = 'SELECT * FROM layanan' ;
    if ($res = $con->query($query)) {
        echo "terdapat ".$res->num_rows ."baris" ; 

    } else{
        echo 'gagal mengambil data' ;
    }
