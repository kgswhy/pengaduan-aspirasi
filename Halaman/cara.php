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
<div class="Halaman">
</div>
<div class="w3-container text-center">
  <h2>Tata Cara</h2>
  <p>Gambar dibawah menunjukan tata cara dalam beraspirasi yang baik dan benar</p>
</div>

<div class="w3-content" style="max-width:500px">
  <img class="mySlides" src="./images/cara (1).png" style="width:100%">
  <img class="mySlides" src="./images/cara (2).png" style="width:100%">
  <img class="mySlides" src="./images/cara (3).png" style="width:100%">
  <img class="mySlides" src="./images/cara (4).png" style="width:100%">
  <img class="mySlides" src="./images/cara (5).png" style="width:100%">
  <img class="mySlides" src="./images/cara (6).png" style="width:100%">
  <img class="mySlides" src="./images/cara (7).png" style="width:100%">
</div>

<div class="w3-center">
  <div class="w3-section">
    <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ sebelumnya</button>
    <button class="w3-button w3-light-grey" onclick="plusDivs(1)">selanjutnya ❯</button>
  </div>
  <button class="w3-button demo" onclick="currentDiv(1)">Langkah Pertama</button> 
  <button class="w3-button demo" onclick="currentDiv(2)">Langkah Kedua</button> 
  <button class="w3-button demo" onclick="currentDiv(3)">Langkah Ketiga</button> 
  <button class="w3-button demo" onclick="currentDiv(3)">Langkah Keempat</button> 
  <button class="w3-button demo" onclick="currentDiv(3)">Langkah Kelima</button> 
  <button class="w3-button demo" onclick="currentDiv(3)">Langkah Keenam</button> 
  <button class="w3-button demo" onclick="currentDiv(3)">Langkah Ketujuh</button> 
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-pink", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-pink";
}
</script>
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