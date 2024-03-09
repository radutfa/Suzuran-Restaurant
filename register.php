<?php
    session_start();
    include 'db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Suzuran</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="shortcut icon" href="img/logo2.png">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Register</h2>
        <form action="" method="POST">
             <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control"  required>
             <input type="text" name="user" placeholder="Username" class="input-control"  required>
             <input type="text" name="hp" placeholder="Nomor Hp" class="input-control"  required>
            <input type="text" name="pass" placeholder="Password" class="input-control" required>
             <input type="email" name="email" placeholder="Alamat email" class="input-control"   required>
             <input type="text" name="alamat" placeholder="Alamat lengkap" class="input-control" required>
             <input type="submit" name="submit" value="Register" class="btn">
            
        </form>
        <?php 
                  if (isset($_POST['submit'])) {
                    $nama = ucwords($_POST ['nama']);
                    $user   = $_POST['user'];
                    $pass   = $_POST['pass'];
                    $hp     = $_POST['hp'];
                    $email   = $_POST['email'];
                    $alamat = ucwords($_POST['alamat']);

                    $insert = mysqli_query($conn, "INSERT INTO tb_admin SET 
                        admin_name= '".$nama."',
                        username= '".$user."',
                        password= '".MD5($pass)."',
                        admin_telp= '".$hp."',
                        admin_email= '".$email."',
                        admin_address= '".$alamat."'
                             ");
                    if ($insert) {
                      echo '<script>alert("Pendaftaran Berhasil")</script>';
                      echo '<script>window.location="login.php"</script>';
                    }else{
                      echo 'gagal'.mysqli_error($conn);
                    }
                  }

         ?>
    </div>
</body>
</html>