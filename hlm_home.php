<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>PROFILE KLINIK MEKAR SARI </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #818181;
      ;

    }

    h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
    }

    h3,
    h4 {
      margin: 6px 0 30px 0;
      letter-spacing: 5px;
      font-size: 20px;
      color: #111;
    }

    .container {
      padding: 80px 120px;
    }

    .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
    }

    .person:hover {
      border-color: #f1f1f1;
    }

    .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%);
      /* make all photos black and white */
      width: 100%;
      /* Set width to 100% */
      margin: auto;
    }

    .carousel-caption h3 {
      color: #fff !important;
    }

    @media (max-width: 600px) {
      .carousel-caption {
        display: none;
        /* Hide the carousel text when the screen is less than 600 pixels wide */
      }
    }

    .bg-1 {
      background: #556B2F;
      color: #bdbdbd;
    }

    .bg-1 h3 {
      color: #fff;
    }

    .bg-1 p {
      font-style: italic;
    }

    .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
    }

    .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
    }

    .thumbnail p {
      margin-top: 15px;
      color: #555;
    }

    .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
    }

    .btn:hover,
    .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
    }

    .modal-header,
    h4,
    .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
    }

    .modal-header,
    .modal-body {
      padding: 40px 50px;
    }

    .nav-tabs li a {
      color: #777;
    }

    #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
    }

    .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #556B2F;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
    }

    .navbar li a,
    .navbar .navbar-brand {
      color: #d5d5d5 !important;
    }

    .navbar-nav li a:hover {
      color: #fff !important;
    }

    .navbar-nav li.active a {
      color: #fff !important;
      background-color: #556B2F;
       !important;
    }

    .navbar-default .navbar-toggle {
      border-color: transparent;
    }

    .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
    }

    .dropdown-menu li a {
      color: #000 !important;
    }

    .dropdown-menu li a:hover {
      background-color: red !important;
    }

    footer {
      background-color: #556B2F;
      color: #f5f5f5;
      padding: 32px;
    }

    footer a {
      color: #f5f5f5;
    }

    footer a:hover {
      color: #556B2F;
      text-decoration: none;
    }

    .form-control {
      border-radius: 0;
    }

    textarea {
      resize: none;
    }
  </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="klinik.php">KLINIK MEKAR SARI</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        </ul>
      </div>
    </div>
  </nav>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/1.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Tampilan depan </h3>
          <p>Klinik MEKAR SARI</p>
        </div>
      </div>

      <div class="item">
        <img src="images/home1.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Tampilan Ruang Tunggu</h3>
          <p>Klinik MEKAR SARI</p>
        </div>
      </div>

      <div class="item">
        <img src="images/home2.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Tampilan Ruangan Periksa</h3>
          <p>Klinik MEKAR SARI</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Container (The Band Section) -->
  <div id="band" class="container text-center">
    <h2>KLINIK MEKAR SARI</h2>
    <h3>Komitmen Kami Datang Dari Hati.
      <br>Kami Lahir Dari Sebuah Ketulusan.</h3>
    <p><em>Klinik Mekar Sari lahir dari sebuah ketulusan untuk menghadirkan layanan kesehatan yang jujur, adil dan professional.</em></p>
    <p>Klinik ini didirikan dengan maksud memberikan layanan kesehatan yang memadai ; lengkap sarana dan prasarananya dan bekerja secara jujur ; adil dan profesional dengan dukungan sumberdaya manusia yang berkualitas sehingga dapat memberikan layanan kesehatan yang memuaskan bagi pasien dan masyarakat di sekitar klinik dan masyarakat umum yang membutuhkan jasa kesehatan.</p>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <p class="text-center"><strong></strong></p><br>
        <a href="#demo" data-toggle="collapse">
          <img src="images/hom1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
        </a>

      </div>
      <div class="col-sm-4">
        <p class="text-center"><strong></strong></p><br>
        <a href="#demo2" data-toggle="collapse">
          <img src="images/hom2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
        </a>

      </div>
      <div class="col-sm-4">
        <p class="text-center"><strong></strong></p><br>
        <a href="#demo3" data-toggle="collapse">
          <img src="images/hom3.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
        </a>

      </div>
    </div>
  </div>

  <!-- Container (TOUR Section) -->
  <div id="tour" class="bg-1">
    <div class="container">
      <h3 class="text-center"> Pelayan Info Dokter </h3>
      <p class="text-center">Pada layanan ini jadwal dokter setiap harinya <br> lihat jadwal yang tersedia dan pilih dokternya!</p>
      <ul class="list-group">
        <li class="list-group-item">Senin<span class="label label-danger">habis!</span></li>
        <li class="list-group-item">Selasa<span class="label label-danger">habis!</span></li>
        <li class="list-group-item">Rabu<span class="badge">3</span></li>
      </ul>

      <div class="row text-center">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/dokabdul.jpg" alt="dokter" width="400" height="300">
            <p><strong>Dokter Bedul</strong></p>
            <p>Rabu 25 Juli 2019</p>
            <p>16:00-22.00</p>
            <form method="post" action="form_pendaftran1.php">
              <button class="btn" data-toggle="modal" data-target="#myModal" type="submit">Pilih</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/dokfarah.jpg" alt="New York" width="400" height="50">
            <p><strong>Dokter Parah</strong></p>
            <p>Rabu 26 Juli 2019</p>
            <p>09:00-16:00</p>
            <form method="post" action="form_pendaftran1.php">
              <button class="btn" data-toggle="modal" data-target="#myModal" type="submit">Pilih</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/dokazmi.jpg" alt="San Francisco" width="400" height="300">
            <p><strong>Dokter Mimi</strong></p>
            <p>Rabu 25 Juli 2019</p>
            <p>16:00-22.000</p>
            <form method="post" action="form_pendaftran1.php">
              <button class="btn" data-toggle="modal" data-target="#myModal" type="submit">Pilih</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
                <input type="number" class="form-control" id="psw" placeholder="How many?">
              </div>
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
                <input type="text" class="form-control" id="usrname" placeholder="Enter email">
              </div>
              <button type="submit" class="btn btn-block">Pay
                <span class="glyphicon glyphicon-ok"></span>
              </button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
              <span class="glyphicon glyphicon-remove"></span> Cancel
            </button>
            <p>Need <a href="#">help?</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Container (Contact Section) -->
  <div id="contact" class="container">
    <h3 class="text-center">Komitmen Kami Untuk Terus Menjadi Yang Terbaik</h3>
    <h2 class="text-center"><em>LEBIH DARI 1000 PASIEN TELAH TERLAYANI DENGAN BAIK</em></h2>

    <div class="row">
      <div class="col-md-4">

      </div>
      <div class="col-md-8">
      </div>
    </div>
  </div>
  </div>
  <br>
  <h3 class="text-center">Map Lokasi Klinik</h3>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

    </div>
    <div id="menu1" class="tab-pane fade">

    </div>
    <div id="menu2" class="tab-pane fade">

    </div>
  </div>
  </div>

  <!-- Image of location/map -->
  <img src="images/map.png" class="img-responsive" style="width:100%">

  <!-- Footer -->
  <footer class="text-center">
    <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>
    <p>PROFILE KLINIK MEKAR SARI<a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools"></a></p>
  </footer>

  <script>
    $(document).ready(function() {
      // Initialize Tooltip
      $('[data-toggle="tooltip"]').tooltip();

      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {

          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function() {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    })
  </script>

</body>

</html>