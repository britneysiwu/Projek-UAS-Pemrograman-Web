<?php
require 'functions.php';

$cards = query("SELECT * FROM cards");

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
    <title>Doc</title>
    <link href="homestyle2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
  <h1 class="title">MEMORIZE HELPER</h1>
    <div class="container">
        <!-- <h1 class="title">MEMORIZE HELPER</h1> -->

        <div class="buttons">
        <button><a href="logout.php">Keluar</a></button>
        <button><a href ="tambah.php">Tambah Istilah</button>
        <button><a href ="index.php">Mulai</button>
    </div>

        <div class="cards">
          <table cellpadding="10" cellspacing="0">

            <?php $i = 1; ?>

            <tr>
                <th>No</th>
              <th>Istilah</th>
              <th>Definisi</th>
              <th> </th>
            </tr>

            <?php foreach( $cards as $row ) : ?>

            <tr>
                <td><?= $i ?></td>
                <td><?= $row["istilah"]; ?></td>
                <td><?= $row["definisi"]; ?></td>
                <td>
                  <a class="hps" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apa anda yakin untuk menghapus?');"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>

          </table>
         <!--  Istilah dan definisi yg trsimpan di database -->
        </div>

        
      </div>
      
  </body>
</html>