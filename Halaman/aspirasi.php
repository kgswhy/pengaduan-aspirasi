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
  <img class="mySlides" src="./images/Aspirasi (1).png" style="width:100%">
  <img class="mySlides" src="./images/Aspirasi (2).png" style="width:100%">
  <img class="mySlides" src="./images/Aspirasi (3).png" style="width:100%">
  <img class="mySlides" src="./images/Aspirasi (4).png" style="width:100%">
<br>
<div class="Halaman"></div>
<div class="content">
    
    <div class="container">
      <div class="row ">
        <div class="col-md-12">
          <div class="form h-10">
            <div class="alert alert-primary">
    <strong>Penting!</strong> diharapkan memasukan aspirasi dengan baik dan benar.
  </div>
            <form class="mb-5" method="post" id="contactForm" name="contactForm" action="index.php?page=laporan" class="was-validated">
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Nama *</label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Anda" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">NIS TS *</label>
                  <input type="text" class="form-control" name="nis" id="nis"  placeholder="Masukan NIS Anda" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="budget" class="col-form-label">Kelas</label>
                  <select class="custom-select" id="kelas" name="kelas" required>
    <option selected>Pilih Kelas</option>
    <option value="Kelas X">Kelas X</option>
    <option value="Kelas XI">Kelas XI</option>
    <option value="Kelas XII">Kelas XII</option>
  
  </select>
  <div class="row">
  <div class="col-md-12 form-group mb-3">
                  <label for="" class="col-form-label-">Tanggal Terjadi *</label>
                  <input type="date" class="form-control" name="tanggal" id="tanggal"  placeholder="Masukan NIS Anda" required>
                </div>
                </div>
              </div>
</div>
              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="message" class="col-form-label">Aspirasi *</label>
                  <textarea class="form-control" name="aspirasi" id="aspirasi" cols="30" rows="4"  placeholder="Masukan Aspirasi Anda disini"></textarea>
                </div>
              </div>
              <div class="form-check mb-3">
               <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
           <label class="form-check-label" for="myCheck">Saya menyetujui mengikuti peraturan dan persyaratan yang ada!.</label>
             <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Check this checkbox to continue.</div>
             </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" value="Kirim" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
             
    </div>

</form>
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
  setTimeout(carousel, 3000); // Change image every 3 seconds
}
</script>


          </div>
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