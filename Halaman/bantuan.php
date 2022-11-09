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
<body background="./images/Header.png">
<div class="Halaman">
</div>
<div class="mt-4 p-5 text-center">
  <img src="./images/guestbook.png" width="100%">
</div>
<div class="input">
            <form action="index.php?page=bantuan">
                
                    <div class="input-top">
                        <input required type="text" id="name" placeholder="Nama">
                        <input required type="email" id="email" placeholder="Email">
                    </div>
                    <textarea required placeholder="Saran, Kritik, Serta Masukan Anda" id="comment" cols="30" rows="10"></textarea>
                    <button id="button" type="submit" onclick="myFunction();">Post a Comment</button>
            </form>
            <ul id="comment-list">
            
            </ul>
            </div>
  <script>
    const button = document.querySelector("#button");
const commentList = document.querySelector("#comment-list");

showComments();

function myFunction() {
  var name = document.getElementById("name").value; //getting value of input field
  var email = document.getElementById("email").value;
  var comment = document.getElementById("comment").value;
  let storage = localStorage.getItem("New Comments"); //getting localstorage

  if (storage == null) {
    listArr = [];
  } else {
    listArr = JSON.parse(storage);
  }

  listArr.push(
    //pushing or adding new value in array
    "<span>" +
      "<img src = './images/user.png'/>" +
      name +
      "<br/>" +
      email +
      "</span>" +
      "<br>" +
      comment
  );
  localStorage.setItem("New Comments", JSON.stringify(listArr));

  showComments(); //calling showComments function
}

function showComments() {
  let storage = localStorage.getItem("New Comments");

  if (storage == null) {
    listArr = []; //create a blank array
  } else {
    listArr = JSON.parse(storage); //transforming json string into a js object
  }

  let liTag = "";

  listArr.forEach((element, index) => {
    liTag += `<li> ${element} </li>`;
  });

  commentList.innerHTML = liTag;
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