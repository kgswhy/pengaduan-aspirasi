<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Document</title>
</head>
<body>
<div class="w3-content w3-section" style="max-width:1000px">
  <img class="mySlides" src="./images/Home (1).png" style="width:100%">
  <img class="mySlides" src="./images/Home (2).png" style="width:100%">
  <img class="mySlides" src="./images/Home (3).png" style="width:100%">


<div class="container-fluid mt-3">
  <h2 color="#fff">Aspirasi</h2>
  <p>Aspirasi didalam platform website ini terinspirasi dari salah satu program kerja dalam organisasi MPK, aspirasi sendiri adalah merupakan keinginan yang ada dalam diri seseorang yang memicu timbulnya perilaku dan usaha terarah untuk mencapai tujuan yang diharapkan, aspirasi dapat di sampaikan dari semua orang di SMK Telkom Jakarta</p>
  <div class="row">
    <div class="col p-3 bg-primary text-white">Guru</div>
    <div class="col p-3 bg-dark text-white">Siswa</div>
    <div class="col p-3 bg-primary text-white">Maupun warga sekolah lainnyaw</div>
  </div>
</div>
<div class="container mt-3">
  <h2>Majelis Perwakilan Kelas</h2>
  <p>Apa sih itu MPK?, MPK adalah organisasi di SMK Telkom Jakarta yang salah satu tanggung jawabnya menampung dan menyaring aspirasi.</p>
  <button type="button" class="w3-button w3-border w3-hover-pink" data-bs-toggle="collapse" data-bs-target="#demo">Klik disini</button>
  <div id="demo" class="collapse">
  <div class="alert alert-info">
    ingin lebih tau tentang MPK, <a href="index.php?page=tentang" class="alert-link"> sinii! </a>

  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>Social Media</h2>
      
      <p>dibawah ini kalian dapat mengunjungi sosial media dari SMK Telkom Jakarta dan MPK SMK Telkom Jakarta</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
        <a href="https://www.instagram.com/smktelkomjakarta/"><span class="fa fa-instagram fa-1x"><b>SMK Telkom Jakarta</b></a>
        </li>
        <li class="nav-item">
        <a href="https://www.instagram.com/mpktelkomjakarta/"><span class="fa fa-instagram fa-1x"><b>MPK SMK Telkom Jakarta</b></a>
        </li>
        <li class="nav-item">
        <a href="https://github.com/kgswhy"><span class="fa fa-github fa-1x"><b>Kgs. Wahyu Hidayat</b></a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
     
      <video controls playsinline autoplay muted loop height="250" width="700">
    <source src="./images/mpk.mp4" type="video/webm" />
  </video>
      <p align="center">Majelis Perwakilan Kelas 2022/2023</p>
      
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>



<div class="Halaman"></div>
<div class="container mt-3">
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <a href="https://www.facebook.com/smktelkomjkt"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  <a href="https://www.instagram.com/smktelkomjakarta/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
  <a href="https://twitter.com/telkomschool"><i class="fa fa-twitter w3-hover-opacity"></i></a>
  <p class="w3-medium">Powered by <a href="https://smktelkom-jkt.sch.id/" target="_blank"><strong>SMK Telkom Jakarta</strong></a></p>
  <a href="https://github.com/kgswhy" class="d-flex align-items-center justify-content-center"><span class="fa fa-github"><i class="sr-only">Github</i></span></a>
  <div class="bg-light mt-5">
              <div class="container p-4 text-center">
                Copyright ©2022 All rights reserved | Created By Kgs. Wahyu Hidayat
              </div>
            </div>
            </footer>
</body>
</html>