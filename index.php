<!doctype html>
<html lang="en">
  <head>
  	<title>Majelis Perwakilan Kelas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="css/style.css">	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="images/favicon.ico">
	</head>
	<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
		<div class="container">
			<object type="image/svg+xml" data="./images/P.svg">
				<img class="w3-animate-bot" src="./images/P.svg" alt="SMK Telkom Jakarta" title="Majelis Perwakilan Kelas">
				</object>
             <div class="caption">
			<div class="row justify-content-center">
			</div>
		</div>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
		    <div class="container">
		    	<a class="navbar-brand" href="https://www.instagram.com/mpktelkomjakarta/">
					<img src="./images/p.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill" align="left"> 
				</a>
		    	<div class="social-media order-lg-last">
		    		<p class="mb-0 d-flex">
		    			<a href="https://www.facebook.com/smktelkomjkt" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="https://twitter.com/telkomschool" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    			<a href="https://www.instagram.com/smktelkomjakarta/" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
						<a href="https://github.com/kgswhy" class="d-flex align-items-center justify-content-center"><span class="fa fa-github"><i class="sr-only">Github</i></span></a>
						
		    		</p>
		    		</p>
	        </div>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="fa fa-bars"></span> Menu
		      </button>
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto mr-md-3">
		        	<li class="nav-item"><a href="index.php?page=home" class="nav-link">Home</a></li>
		        	<li class="nav-item"><a href="index.php?page=tentang" class="nav-link">Tentang kami</a></li>
					<li class="nav-item"><a href="index.php?page=aspirasi" class="nav-link">Aspirasi</a></li>
		        	<li class="nav-item"><a href="index.php?page=cara" class="nav-link">Tata Cara</a></li>
		            <li class="nav-item"><a href="index.php?page=bantuan" class="nav-link">Buku Tamu</a></li>
				    <li class="nav-item"><a href="index.php?page=kontak" class="nav-link">Kontak</a></li>
					<li class="nav-item"><a href="index.php?page=laporan" class="nav-link"></a></li>
		        </ul>
		      </div>
		    </div>
		  </nav>
    <!-- END nav -->
  </div>
 
           
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>


  <?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "Halaman/home.php";
				break;
			case 'tentang':
				include "Halaman/tentang.php";
				break;
			case 'aspirasi':
				include "Halaman/aspirasi.php";
				break;	
            case 'cara':
                include "Halaman/cara.php";
                break;
			case 'bantuan':
				include "Halaman/bantuan.php";
				break;		
			case 'kontak':
				include "Halaman/kontak.php";
				break;	
			case 'laporan':
				include "Halaman/laporan.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "Halaman/home.php";
	}
 
	 ?>

	</body>
</html>

