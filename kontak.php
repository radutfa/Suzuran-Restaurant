<?php
    session_start();
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 4");
    $a = mysqli_fetch_object($kontak)
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
        <a href="index.php"><img src="img/logo2.png" width="75px"></a>
        <ul>
            <li><a href="produk.php">Menu</a></li>
            <li><a href="Owner.php">Tentang</a></li>
            <li><a href="kontak.php">Kontak Kami</a></li>
            <li><a href="http://instagram.com/suzuran.resto" target="blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://api.whatsapp.com/send?phone=6281284820714" target="blank"><i class="fa fa-whatsapp"></i></a>
        </ul>
        </div>
    </header>
    
    <!-- content -->
    <div class="section">
        <div class="container">
            <div class="judul"><h3>Kontak Kami</h3></div>
            <div class="box">
               <form action="" method="POST" enctype="multipart/form-data">
                 
                   <select class="input-control" name="kategori" required>
                       <option value="">--Pilih--</option>
                       <option value="Design Web"> Design Web</option>
                       <option value="Pelayanan">Pelayanan</option>
                       <option value="Makanan Dan Minuman">Makanan Dan Minuman</option>
                   </select>
                   <input type="text" name="nama" class="input-control" placeholder="Nama " required>
                   <input type="email" name="email" class="input-control" placeholder="Email anda" required>
                   <input type="text" name="hp" class="input-control" placeholder="Nomor Telepon" >
                   <textarea class="input-control" name="deskripsi" placeholder="Pesan anda" ></textarea><br>
                   

                   <input type="submit" name="submit" value="Submit" class="btn">
                </form>
                <?php 
                  if (isset($_POST['submit'])) {
                    $nama       = ucwords($_POST ['nama']);
                    $email      = $_POST['email'];
                    $hp         = $_POST['hp'];
                    $deskripsi  = $_POST['deskripsi'];
                    $kategori   = $_POST['kategori'];


                    $insert = mysqli_query($conn, "INSERT INTO tb_contactus SET 
                        kontak_nama= '".$nama."',
                        kontak_email= '".$email."',
                        kontak_nomor= '".$hp."',
                        kontak_topik= '".$kategori."',
                        kontak_pesan= '".$deskripsi."'
                             ");
                    if ($insert) {
                      echo '<script>alert("Terimakasih atas kritik dan sarannya")</script>';
                      echo '<script>window.location="index.php"</script>';
                    }else{
                      echo 'gagal'.mysqli_error($conn);
                    }
                  }

         ?>
                  
              

            </div>
        </div>
    </div>
    
    <!--footer-->
    <div class="footer">
            <div class="container">
                <h4>Alamat</h4>
                <p><?php echo $a->admin_address ?></p>

                <h4>Email</h4>
                <p><?php echo $a->admin_email ?></p>

                <h4>No.Hp</h4>
                <p><?php echo $a->admin_telp ?></p>


                <small>Copyright &copy; 2021 - Suzuran Restaurant</small>

            </div>
        
        </div>
   
</body>
</html>