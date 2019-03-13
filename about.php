<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#00BCD4" />
  <meta name="msapplication-navbutton-color" content="#00BCD4" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#00BCD4" />
  <title>Code Converter</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
  <link rel="icon" href="assets/img/logo.png">
</head>
<body>  
<nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="/">
      <span class="title-index">Code Converter</span>
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="getmyip.html"></i>MyIP</a>
          <a class="nav-item nav-link" href="md5hashgenerator.html"></i>MD5 Hash</a>
          <a class="nav-item nav-link" href="ipcalc.html"></i>IPCalc</a>
          <a class="nav-item nav-link" href="about.html"></i>About</a>
        </div>
      </div>
    </div>
</nav>
<div class="container mtop">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6 text-center">
              <img src="assets/img/ihsan.jpg" alt="" class="mb-3 mx-auto d-block" width="120" height="140">
              <blockquote class="blockquote mb-0">
                <ul class="ul">
                  <li class="li">Nama : Ihsan Nurul Habib</li>
                  <li class="li">Kelas : XII TIA</li>
                  <li class="li">Sekolah : SMK Negeri 2 Bogor</li>
                  <li class="li">Jurusan : Teknik Komputer Jaringan</li>
                  <li class="li">Alamat : Kp. Babakan Tarikolot Cibinong</li>
                </ul>
              </blockquote>
            </div>
            <div class="col-sm-6 text-center">
              <img src="assets/img/taufik.jpg" alt="" class="mb-3 mx-auto d-block" width="120" height="140">
              <blockquote class="blockquote mb-0">
              <ul class="ul">
                  <li class="li">Nama : Muhamad Taufik Lewenussa</li>
                  <li class="li">Kelas : XII TIA</li>
                  <li class="li">Sekolah : SMK Negeri 2 Bogor</li>
                  <li class="li">Jurusan : Teknik Komputer Jaringan</li>
                  <li class="li">Alamat : Jln. Dharmais Sukaraja</li>
                </ul>
              </blockquote>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col">
              <div class="bd-bl">
                <h6>Untuk Apa Code Converter Dibuat?</h6>
                <figcaption class="figure-caption font-weight-light">Melihat kondisi sekarang ini dimana semua alat-alat/tools sudah sangat memudahkan manusia, kami pun bergerak untuk membuat aplikasi serupa. Awalnya aplikasi ini hanya berfokus untuk melakukan konversi bilangan baik Biner, Desimal, Hexadesimal, maupun Oktal. Dengan seiring waktu, kamipun menambah beberapa tools lagi seperti String Converter, IP Address Tools, dan juga melakukan Hash dengan berbagai macam motode. Aplikasi kami harapkan dapat mempermudah kalian semua untuk mempercepat pekerjaan kalian semua.</p>
                </figcaption>
                <figcaption class="figure-caption font-weight-light">Aplikasi ini dibuat memnggunakan bahasa pemrograman Server-Side yaitu PHP. Kami memadukan beberapa fungsi yang sudah ada atau built-in untuk pembuatan aplikasi web ini. Ada juga beberapa fungsi yang berasal dari komunitas programmer seperti <a href="https://stackoverflow.com">Stackoverflow</a>.</p>
                </figcaption>
                <figcaption class="figure-caption font-weight-light">Kami mengucapkan terima kasih bagi semua yang sudah terlibat dan juga membantu pembuatan aplikasi web ini. Semoga aplikasi web ini dapat bermanfaat bagi kalian semua dan juga dapat digunakan sebagaimana mestinya.</a>.</p>
                </figcaption>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="mt-3 footer-index">
      <div class="card-header text-center light-text text-footer">
        <p>Copyright &copy; 2018 - <?= date('Y') ?> <a href="">Code Converter</a> All Right Reserved</p>
      </div>
</footer>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>