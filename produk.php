<?php
    error_reporting(0);
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
    <link rel="stylesheet" type="text/css" href="slide.css">
    <link rel="shortcut icon" href="img/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        <!-- Produk -->
        <div class="section">
            <div class="container">
       <div class="slider">
        <figure>
            <div class="slide">
                <img src="img/iklan1.jpeg">
            </div>
 
            <div class="slide">
                <img src="img/iklan2.jpeg">
            </div>
 
            <div class="slide">
                <img src="img/iklan3.jpeg">
            </div>
            
            <div class="slide">
                <img src="img/iklan4.jpeg">
            </div>

            <div class="slide">
                <img src="img/iklan5.jpeg">
            </div>
        </figure>
    </div>
<br>
                <div class="judul"><h3>Menu</h3></div>
                <div class="box">
                    <?php
                     if($_GET['search'] != '' || $_GET['kat'] != ''){
                        $where = "AND product_name LIKE '%".$_GET['search']."%' AND category_id LIKE '%".$_GET['kat']."%' ";
                    } 

                    $produk= mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 $where ORDER BY product_id DESC");
                    if(mysqli_num_rows($produk) > 0){
                        while($p = mysqli_fetch_array($produk)){
                     ?>
                <a href="detail-produk.php?id=<?php echo $p['product_id']?>">
                <div class="col-4">
                    <img src="produk/<?php echo $p['product_image'] ?>">
                    <p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
                    <p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
                </div>
                </a>
            <?php }}else{ ?>
                    <p>Produk Tidak Ada</p>
            <?php } ?>
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