<?php
    error_reporting(0);
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 4");
    $a = mysqli_fetch_object($kontak);

    $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($produk);
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title>Suzuran Restaurant</title>
    <link rel="shortcut icon" href="img/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>


<body>
    <!-- header -->
    <header>
        <div class="container">
        <a href="index.php"><img src="img/logo2.png" width="75px"></a>
        <ul>
           
            <li><a href="produk.php">Menu</a></li>
            <li><a href="owner.php">Tentang</a></li>
            <li><a href="kontak.php">Kontak Kami</a></li>
            <li><a href="http://instagram.com/suzuran.resto" target="blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://api.whatsapp.com/send?phone=6281284820714" target="blank"><i class="fa fa-whatsapp"></i></a>
          
        </ul>
        </div>
        </header>

        <!-- search -->
        <div class="search">
            <div class="container">
                <form action="produk.php">
                    <input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search'] ?>">
                    <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
                    <input type="submit" name="cari" value="Cari Produk">
                </form>
            </div>
        </div>

        <!-- product detail -->
        <div class="section">
            <div class="container">
                <div class="judul"><h3>Detail Produk</h3></div>
                <div class="box">
                    <div class="col-2">
                        <img src="produk/<?php echo $p->product_image ?>" width="100%">
                    </div>
                    <div class="col-2">
                        <h3><?php echo $p->product_name ?></h3>
                        <h4>Rp. <?php echo number_format($p->product_price) ?></h4>
                        <p>Deskripsi :<br>
                            <?php echo $p->product_description ?>
                        </p>
                        <p><a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text=Hai,Saya tertarik dengan Menu <?php echo $p->product_name ?> Anda." target="_blank">
                        Hubungin via WhatsApp<br>
                        <img src="img/wa.png" width="50px"></a>
                    </p>
                    </div>
                </div>
            </div>
        </div>

        <!--footer -->
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