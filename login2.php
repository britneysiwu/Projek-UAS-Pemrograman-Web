<?php
session_start();
//ketika sudah login, user tetap berada di halaman
if( isset($_SESSION["login"]) ) {
    header("Location: home2.php");
    exit;
}

if (isset($_POST['submit'])) {
    
    $conn = mysqli_connect("sql301.epizy.com", "epiz_28808440", "MIOZ7Lr1M1YVibd", "epiz_28808440_memorizehelper");
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $result = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username' AND password = '$password'");
    $row = mysqli_fetch_assoc($result);
        if ($row['username'] == $username && $row['password'] == $password ){
            header("Location: home2.php");
            $_SESSION["login"] = true;

} else {
    $error = true;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="logstyle3.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class = container>
    <h1>LOGIN</h1>
    
    <form action="" method="post">
        <div class="inform">
        <div class="row">
            
            
            <p class="label">Username</p>
            <input type="text" name="username" placeholder="Masukkan Username" id="username" required>
            </div>
            </div>
            
            <p class="label">Password</p>
            <input type="password" name="password" placeholder="Masukkan Password" id="password" required>

            <div class="buttons">
            <button type="submit" name="submit">Login</button>
            </form>
            <br>

            <?php  if( isset($error) ) : ?>
            <p class="status">Username atau Password Salah!</p>
            <?php endif;  ?>
            </div>

            
    </div>
        
        </div>
        <div class="tim">
        <a href="https://www.unsrat.ac.id/" style="font-size: 30px">UNSRAT</a>
            <p style="font-weight: bold; ">TEAM</p>
            <p>Andinni, Britney, Jeremy, Tarisa</p>
            </div>
    </div>
    


</body>
</html>
