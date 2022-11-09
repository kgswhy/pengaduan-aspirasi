<div class="Halaman">
<?php

    $nm = $_POST["nama"];

    $nis=$_POST["nis"];

    $kls=$_POST["kelas"];

    $tgl=$_POST["tanggal"];

    $asp=$_POST["aspirasi"];

?> 
<html> 
    <head> 
       <title>SMK Telkom Jakarta</title> 
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    </head> 
    <body> 
    <body >
      <br>
        <p align="center">
           <strong >Laporan Anda Akan Segera Kami Tangani </strong>
</p>
<div class="form-control">
        <?php 
            echo "<p>Nama : ".$nm. "</p>";
            ?>
        <div class="form-control">
            <?php
            echo "<p>NIS : ".$nis. "</p>"; 
            ?>
            <div class="form-control">
            <?php
            echo "<p>Kelas : ".$kls. "</p>";
           ?>
           <div class="form-control">
            <?php
            echo "<p>Tanggal Kejadian : ".$tgl. "</p>";
            ?>
            <div class="form-control">
            <?php
            echo "Aspirasi :".$asp."</p>";
            ?>
            <form action="#">
            <div class="box">
                <div class="col-md-12 form-group text-center">
                  <input type="submit" value="Terimakasih" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
</form>
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