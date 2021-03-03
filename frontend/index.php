<?php include('data_komentar.php')?>
<?php include('data_berita.php')?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Post - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php require_once('partial/navigasi.php') ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?php echo "Ponsel Layar Lipat Xiaomi Lolos Sertifikasi" ?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Virgina Maulita Putri - detikInet</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on January 1, 2019 at 12:00 PM</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

        <hr>

        <!-- Post Content -->
        <?php echo 'Jakarta - Beberapa bocoran menyebutkan Xiaomi akan meluncurkan ponsel layar lipat pertamanya pada tahun ini. Kini ponsel misterius tersebut telah lolos sertifikasi di China.
                    Tipster asal China Digital Chat Station menemukan perangkat ini di database badan sertifikasi China TENAA. Ponsel ini mengusung kode M2011J18C, seperti dikutip dari Gizmochina, Minggu (28-2-2021).
                    Saat ini tidak ada informasi tambahan tentang spesifikasi atau desain ponsel layar lipat Xiaomi di situs TENAA. Satu-satunya informasi yang tersedia adalah ponsel ini memiliki dukungan untuk jaringan 5G.
                    Sebelumnya analis Ross Young mengklaim Xiaomi akan meluncurkan tiga ponsel layar lipat tahun ini. Ponsel ini akan memiliki tiga desain berbeda yaitu melipat ke dalam, melipat ke luar dan clamshell.
                    Belum diketahui desain apa yang akan diusung M2011J18C, tapi jika ponsel ini sudah lolos sertifikasi artinya ponsel ini akan diluncurkan tidak lama lagi.
                    Young bahkan pernah mengatakan ponsel layar lipat pertama Xiaomi akan hadir di awal 2021. Jadi kemungkinan kita tidak harus menunggu hingga paruh kedua tahun 2021 untuk melihat wujud ponsel layar lipat ini.
                    Rumor yang beredar sebelumnya mengklaim ponsel layar lipat pertama Xiaomi akan menggunakan chipset Snapdragon 888 dan display dengan refresh rate 120 Hz. Ponsel ini juga diprediksi menggunakan kamera 108 MP 
                    dan antarmuka MIUI 12 yang sudah disesuaikan khusus untuk ponsel layar lipat'?>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <?php foreach($komentar as $kmt ):  ?>
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0"><?php echo $kmt['nama'] ?></h5>
            <?php echo $kmt ['komentar'] ?>
          </div>
        </div>
        <?php endforeach?>

       

      </div>

      <!-- Sidebar Widgets Column -->
      <?php require_once ('partial/sidebar.php') ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php require_once('partial/footer.php')?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>