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
    <link rel="stylesheet" type="text/css" href="tentang.css">
    <link rel="shortcut icon" href="img/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
	$("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});


  

</script>
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

        <div class="section">
           <div class="container">
            <div class="background-image"></div>
               <div class="judul"><h3>Tentang Kami</h3></div>
               <div class="box">
                   <img class="tengah" src="img/tentang1.jpg" style="border: 5px solid;" />
                   <br>
               </div>
                   <div id="flip">Klik untuk mengetahui lebih Tentang Suzuran Restaurant</div>
                   <div id="panel">Restoran Suzuran merupakan restoran modern yang dibentuk oleh 3 orang mahasiswa unsri
Didirikan pada tanggal 4 mei 2021 berlokasi di Jl.Ampera Kec.Alang-alang Lebar Kel.Rawasari No.1 Kota Palembang
Dibuka pada tahun 2021, Suzuran Resto menyajikan makanan lezat dan menyediakan layanan hebat dalam suasana yang ramah, nyaman dan santai.
Beberapa menu andalan kami seperti Nasi Goreng Spesial , Bebek Sambal Ijo, Ayam Lada Hitam, Udang Goreng Tepung, Soto kambing, Sup iga sapi yang akan kami sajikan degan rasa dan penampilan yang spesial, ditambah suasana dari resto kami yang bernuansa modern “kekinian” cocok sekali untuk dijadikan tempat berkumpul santai bersama keluarga, pasangan maupun untuk tempat meeting yang “Representatif”. 
Tekad, semangat dan fokus pada kenyamanan pelanggan, Bandar Djakarta akan terus melakukan pengembangan dan menjaga kualitas agar tetap memberikan pelayanan yang maksimal dan terbaik kepada seluruh pengunjung.</div>
                   <br>
                   <img src="img/profil1.png" width="25%" style="float:left;margin: 0 8px 4px 0;">
                   <div class="profil">
					Nama saya Radutfa Samuel Jasintan Sihotang <br>
          umur saya 18 tahun asal saya dari jambi. <br>
          <br>
          Saya seorang mahasiswa di universitas sriwijaya jurusan sistem informasi <br>
          sebelum kuliah saya adalah seorang siswa sma di SMA N 1 KOTA JAMBI <br>
          saat ini saya bertempat tinggal di kota Jambi <br>
												
			 </div>
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

                   <img src="img/profil2.png" width="25%" style="float:left;margin: 0 8px 4px 0;">
                   <div class="profil">
					Nama saya Muhammad Ihsan<br>
          umur saya 18 tahun asal saya dari Palembang. <br>
          <br>
          Saya seorang mahasiswa di universitas sriwijaya jurusan sistem informasi <br>
          sebelum kuliah saya adalah seorang siswa sma di SMA N 17 PLUS PALEMBANG <br>
          saat ini saya bertempat tinggal di Palembang <br>
                </div>
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
			 

                   <img src="img/profil3.png" width="25%" style="float:left;margin: 0 8px 4px 0;">
                   <div class="profil">
					Nama saya Radutfa Samuel Jasintan Sihotang <br>
          umur saya 18 tahun asal saya dari jambi. <br>
          <br>
          Saya seorang mahasiswa di universitas sriwijaya jurusan sistem informasi <br>
          sebelum kuliah saya adalah seorang siswa sma di SMA N 1 KOTA JAMBI <br>
          saat ini saya bertempat tinggal di kota Jambi <br>
                </div>
				<br>
			 <br>
			 <br>
			 <br>
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