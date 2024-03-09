<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
    $query=mysqli_query($conn,"SELECT * FROM tb_admin WHERE admin_id= '".$_SESSION['id']."'");
    $d=mysqli_fetch_object($query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title>Suzuran Restaurant</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="img/logo2.png">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="">Suzuran Restaurant</a></h1>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="data-kategori.php">Data Kategori</a></li>
            <li><a href="data-produk.php">Data Produk</a></li>
            <li><a href="data-tentang.php">Data Tentang</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
        </div>
    </header>
    
    <!-- content -->
    <div class="section">
        <div class="container">
            <div class="judul"><h3>Profil</h3></div>
            <div class="box">
               <form action="" method="POST">
                   <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->admin_name?>" required>
                   <input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username?>" required>
                   <input type="text" name="hp" placeholder="Nomor Hp" class="input-control" value="<?php echo $d->admin_telp?>" required>
                   <input type="email" name="email" placeholder="Alamat email" class="input-control" value="<?php echo $d->admin_email?>"  required>
                   <input type="text" name="alamat" placeholder="Alamat lengkap" class="input-control" value="<?php echo $d->admin_address?>"  required>
                   <input type="submit" name="submit" value="Ubah Profil" class="btn">

               </form>

               <?php
                if (isset($_POST['submit'])) {
                    $nama   = ucwords($_POST['nama']);
                    $user   = $_POST['user'];
                    $hp     = $_POST['hp'];
                    $email   = $_POST['email'];
                    $alamat = ucwords($_POST['alamat']);
                    
                    $update = mysqli_query($conn, "UPDATE tb_admin SET 
                        admin_name= '".$nama."',
                        username= '".$user."',
                        admin_telp= '".$hp."',
                        admin_email= '".$email."',
                        admin_address= '".$alamat."'
                        WHERE admin_id = '".$d->admin_id."'      ");
                    if($update){
                        echo '<script>alert("Ubah data berhasil")</script>';
                        echo '<script>window.location("profil.php")</script>';
                    }else{
                        echo 'gagal' .mysql_error($conn);
                    }

                }

               ?>

            </div>

          <div class="judul"><h3>Ubah Password</h3></div>
            <div class="box">
               <form action="" method="POST">
                   <input type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
                   <input type="password" name="pass2" placeholder="Konfirmasi Password" class="input-control" required>
                  
                   <input type="submit" name="ubah_password" value="Ubah Password" class="btn">

               </form>

               <?php
                if (isset($_POST['ubah_password'])) {
                    
                    $pass1   = $_POST['pass1'];
                    $pass2   = $_POST['pass2'];
                   
                   if ($pass2 != $pass1) {
                       echo'<script>alert("Konfirmasi Password Baru Tidak Sesuai")</script>';
                   }else{

                    $u_pass = mysqli_query($conn, "UPDATE tb_admin SET 
                        password= '".MD5($pass1)."'
                        WHERE admin_id = '".$d->admin_id."'      ");
                    if ($u_pass) {
                        echo '<script>alert("Ubah data berhasil")</script>';
                        echo '<script>window.location("profil.php")</script>';
                    }else{
                         echo 'gagal' .mysql_error($conn);
                    }

                   }
                    
                }

               ?>
          
            </div>
        </div>
    </div>
    
    <!--footer-->
    <footer>
        <div class="container">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
            <small>Copyright &copy; 2021 - Suzuran Restaurant.</small>
        </div>
    </footer>    
</body>
</html>