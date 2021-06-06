<?php
session_start();
//menghalangi user pindah ke halaman upload apabila user belum berhasil login

if( !isset($_SESSION["login"]) ) {
    header("Location: login2.php");
    exit;
}

require 'functions.php';

//cek apa tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    //cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('berhasil ditambahkan');
                document.location.href = 'home2.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('gagal ditambahkan');
            document.location.href = 'home2.php';
        </script>
        ";
    }
    
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Istilah</title>
    <link href="homestyle2.css" rel="stylesheet" type="text/css" />
    
  </head>
  <body>
  <h1 class="title">MEMORIZE HELPER</h1>
      <div align="center" class="tarea">
      <form actions="" method="post">
         
                <textarea cols="35" rows="3" name="istilah" id="istilah" placeholder="Istilah" required></textarea>
                <br>
            
                <textarea cols="35" rows="3" name="definisi" id="definisi" placeholder="Definisi" required></textarea>
            
</div>

        <div class="buttons">
        <button type="submit" name="submit">Tambah</button>
        <button><a href ="home2.php">Kembali</button>
</div>
    </form>
   
</body>
</html>
