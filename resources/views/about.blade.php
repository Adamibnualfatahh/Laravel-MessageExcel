<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="image/excel.png">
    <title>MessageApp | PT Kusuma</title>
    <style>
      #myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: #222; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 20px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
    </style>
  </head>
  <body style="font-family: 'Poppins', sans-serif;">
        <a href="{{ route('home') }}"> <button class="btn btn-success mt-3 fixed-top rounded-pill pl-3 ml-3">Kembali</button></a>
   <section class="fdb-block">

    <div class="container">
      <button onclick="topFunction()" id="myBtn" title="Go to top">Kembali Atas</button>
        <div class="row justify-content-center">
        <div class="col col-md-8 text-center">
            <h1 class="mt-4 fw-bold">Cara Pemakaian</h1>
            <p class="lead mb-4">Web MessageApp</p>
        </div>
        </div>
    </div>
    </section>
<section class="fdb-block">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-8 text-center mt-4">
            <h3>Siapkan Data Excel</h3>
            <p>Buat data seperti contoh dibawah , utuk row 1 digunakan untuk nama,row 2 untuk nomor HP,row 3 untuk pesan</p>
            <img alt="image" class="img-fluid" src="image/4.png">
          </div>

          <div class="col-12 col-lg-8 text-center mt-4">
            <h3>Bukak Halaman Web</h3>
            <p>Kemudian masukan file excel tadi dengan cara klik choase file</p>
            <img alt="image" class="img-fluid" src="image/1.jpeg">
            <p>Cari file Excel lalu klik Open</p>
            <img alt="image" class="img-fluid" src="image/5.png">
            <p>Selanjutnya adalah klik import untuk menampilkan data excel</p>
            <img alt="image" class="img-fluid" src="image/2.jpeg">
          </div>

          <div class="col-12 col-lg-8 text-center mt-4">
            <h3>Kirim Pesan</h3>
            <p>Jika data sudah masuk kedalam tebel maka kalian tinggal menekan tombol kirim untuk langsung mengirimkan pesan whatsapp</p>
            <img alt="image" class="img-fluid" src="image/6.jpeg">
            <p>Klkik tombol kirim</p>
            <img alt="image" class="img-fluid" src="image/3.jpeg">
          </div>

           <div class="col-12 col-lg-8 text-center mt-4">
            <h3>Hapus data</h3>
            <p>Untuk membersihkan semua data kalian tinggal klik pada tombol hapus semua</p>
            <img alt="image" class="img-fluid" src="image/7.jpeg">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <script>
    //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
  </script>
</html>