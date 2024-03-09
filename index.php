<?php 
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
        <img src="img/logo2.png" width="75px">
        <ul>
           
            <li><a href="produk.php">Menu</a></li>
            <li><a href="Owner.php">Tentang</a></li>
            <li><a href="kontak.php">Kontak Kami</a></li>
            <li><a href="http://instagram.com/suzuran.resto" target="blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://api.whatsapp.com/send?phone=6281284820714" target="blank"><i class="fa fa-whatsapp"></i></a>
          
        </ul>
        </div>
        </div>
        </header>

        <!-- search -->
        <div class="search">
            <div class="container">
                <form action="produk.php">
                    <input type="text" name="search" placeholder="Cari Produk">
                    <input type="submit" name="cari" value="Cari Produk">
                </form>
            </div>
        </div>


        <!-- kategori -->
        <div class="section">
            <div class="container">
                <div class="judul"><h3>Kategori</h3></div>
                <div class="box">
                    <?php 
                        $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id ASC");
                        if(mysqli_num_rows($kategori) > 0){
                            while($k = mysqli_fetch_array($kategori)){
                     ?>
                     <a href="produk.php?kat=<?php echo $k['category_id'] ?>">
                    <div class="col-5">
                        <img src="img/icon-kategori.png" width="50px" style="margin-bottom: 5px;">
                        <p><?php echo $k['category_name'] ?></p>
                    </div>
                    </a>
                <?php }}else{ ?>
                    <p>Kategori Tidak Ada</p>
                <?php } ?>

                </div>
            </div>
        </div>

        <!-- Produk -->
        <div class="section">
            <div class="container">
                  <div class="judul"><h3>Menu Terbaru</h3></div>
              
                <div class="box">
                    <?php
                    
                    $produk= mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC limit 4 ");
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