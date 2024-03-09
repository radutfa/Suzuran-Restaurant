<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title>Suzuran Restaurant</title>
    <link rel="shortcut icon" href="img/logo2.png">
    <link rel="stylesheet" type="text/css" href="admin.css">
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
            <div class="judul"><h3>Data </h3></div>
            <div class="box">

                

                <table border="1" cellspacing="0"  width="100%" >
                    <thead>
                        <tr height="30px">
                            <th width="60px">No</th>
                            <th width="60px">Kategori</th>
                            <th width="60px">Nama </th>
                            <th width="60px">Email</th>
                          
                            <th width="60px">Nomor Telepon</th>
                            <th width="60px">Pesan</th>
                            <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no= 1;
                            $produk = mysqli_query($conn, "SELECT * FROM tb_contactus ORDER BY kontak_id DESC");
                            if(mysqli_num_rows($produk)>0){
                            while ($row = mysqli_fetch_array($produk)) {
                         ?>
                        <tr height="30px">
                            <td align="center" width="5%"><?php echo $no++ ?>.</td>
                            <td align="center" ><?php echo $row['kontak_topik']?></td>
                            <td align="center" ><?php echo $row['kontak_nama']?></td>
                            <td align="center" ><?php echo $row['kontak_email']?></td>
                            <td align="center" ><?php echo $row['kontak_nomor'] ?></td>
                            <td align="center" ><?php echo $row['kontak_pesan']?></td>
                            
                            
                            <td align="center">
                                <a href="proses-hapus.php?idt=<?php echo $row['kontak_id']?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php }}else{ ?>
                        
                        <tr>
                            <td align="center" colspan="7">Tidak ada data</td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>
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
            <br>
            <br>
            <br>
            <br>
             <br>
            <br>
             <br>
            <br>
            <br>
            <br>
            <br>
             <br>
            <br>
             <br>
            <br>
            <br>
            <br>
            <br>
             <br>
            <br>
             <br>
            <br>
            <br>
            <br><br>
            <small>Copyright &copy; 2021 - Suzuran Restaurant.</small>
        </div>
    </footer>    
</body>
</html>