<?php
require 'functions.php';

$cards = query("SELECT * FROM cards
ORDER BY RAND()
LIMIT 1;");

session_start();
    //menghalangi user pindah ke halaman upload apabila user belum berhasil login
    if( !isset($_SESSION["login"]) ) {
        header("Location: login2.php");
        exit;
    }
    
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", height=device-height, initial-scale=1>
    <title>Projek UAS</title>
    <link href="instyle.css" rel="stylesheet" type="text/css" />
    
  </head>
  <body>

  <?php foreach( $cards as $row ) : ?>

    <div class="container">
        <h1 class="title">MEMORIZE HELPER</h1>

        

        <div class="term">
            <h3><?= $row["istilah"]; ?></h3>
        </div>

        <div class="definition">
            <h3><?= $row["definisi"]; ?></h3>
        </div>

        <div class="button">
            <button class="check">Lihat Jawaban</button>
            <button class="hide">Sembunyikan</button>
            <!-- <button class="col">Ganti Warna</button> -->
            <form actions="" method="post"><button type="submit" name="submit" class="next">Selanjutnya</button></form>
            <button class="back"><a href ="home2.php">Kembali</button>
        </div>
        <?php endforeach; ?>
        
        
      </div>

    <script src="script2.js"></script>
  </body>
</html>