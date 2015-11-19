<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Saudariku - Wild Ducks</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Wild Ducks</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Tentang Kami</a></li>
          <li><a href="{{URL::to('login')}}">Login</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Saudariku</h1>
        <div class="row center">
          <h5 class="header col s12 light">Wanita hebat untuk Indonesia hebat</h5>
        </div>
        <div class="row center">
          <a href="{{URL::to('login')}}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Mulai</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="assets/gambar4.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Kodok Mati</h5>

            <p class="light">Kodok vs ayam berakhir tragis untuk si kodok</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Bebek menjadi raja hutan</h5>

            <p class="light">Bebek Menerkam Singa yang ganas</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">celana</h5>

            <p class="light">Celana robek</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Karena Wanita Begitu Berharga</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="assets/gambar2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">telek jaran gede tenan sak slinder bunder atos kotos-kotos</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Sangat keren dan trendy yoi</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="assets/gambar3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Deskripsi Perusahaan</h5>
          <p class="grey-text text-lighten-4">Wild ducks adalah wild ducks</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Alamat</h5>
          <ul>
            <li><a class="white-text" href="#!">bebek@gmail.com</a></li>
           
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Media Sosial</h5>
          <ul>
            <li><a class="white-text" href="#!">Facebook</a></li>
            <li><a class="white-text" href="#!">Twitter</a></li>
            <li><a class="white-text" href="#!">Instagram</a></li>
            <li><a class="white-text" href="#!">Whatsapp</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Dibuat oleh <a class="brown-text text-lighten-3" href="http://materializecss.com">Wild Ducks</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>

  </body>
</html>
