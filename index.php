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
  <link href="https://fonts.googleapis.com/css?family=Roboto:500,700" rel="stylesheet">
  <link rel="icon" href="assets/img/logo.png">
</head>
<body>  
  <!-- navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="#">
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
    <!-- <div class="collapse navbar-collapse" id="navbarNavDropdown"> -->
      
    <!-- </div> -->
    </div>
  </nav>
<h4 class="text-center border-bottom pt-4 pb-3 margin-atas judul-index">Number Converter</h4>
<div class="container mt-4">
  <div class="col">
    <div class="row justify-content-center">
      <a class="btn btn-link btn-lg" href="dectobin.html" role="button">Decimal to Binary</a>
      <a class="btn btn-link btn-lg" href="dectohex.html" role="button">Decimal to Hex</a>
      <a class="btn btn-link btn-lg" href="dectooct.html" role="button">Decimal to Octal</a>
      <a class="btn btn-link btn-lg" href="bintodec.html" role="button">Binary to Decimal</a>
      <a class="btn btn-link btn-lg" href="bintooct.html" role="button">Binary to Octal</a>
      <a class="btn btn-link btn-lg" href="bintohex.html" role="button">Binary to Hex</a>
      <a class="btn btn-link btn-lg" href="octtodec.html" role="button">Octal to Decimal</a>
      <a class="btn btn-link btn-lg" href="octtobin.html" role="button">Octal to Binary</a>
      <a class="btn btn-link btn-lg" href="octtohex.html" role="button">Octal to Hex</a>
      <a class="btn btn-link btn-lg" href="hextodec.html" role="button">Hex to Decimal</a>
      <a class="btn btn-link btn-lg" href="hextobin.html" role="button">Hex to Binary</a>
      <a class="btn btn-link btn-lg" href="hextooct.html" role="button">Hex to Octal</a>
    </div>
  </div>
</div>
<h4 class="text-center border-bottom pt-4 pb-3 judul-index">String Converter</h4>
<div class="container mt-4">
  <div class="col">
    <div class="row justify-content-center">
      <a class="btn btn-link btn-lg" href="strtobin.html" role="button">String to Binary</a>
      <a class="btn btn-link btn-lg" href="bintostr.html" role="button">Binary to String</a>
      <a class="btn btn-link btn-lg" href="cipher.html" role="button">Cipher Encryption</a>
      <a class="btn btn-link btn-lg" href="md5hashgenerator.html" role="button">MD5 Hash Generator</a>
      <a class="btn btn-link btn-lg" href="sha1hashgenerator.html" role="button">SHA1 Hash Generator</a>
      <a class="btn btn-link btn-lg" href="base64encode.html" role="button">Base64 Encode</a>
      <a class="btn btn-link btn-lg" href="base64decode.html" role="button">Base64 Decode</a>
    </div>
  </div>
</div>
<h4 class="text-center border-bottom pt-4 pb-3 judul-index">IP Address Tools</h4>
<div class="container mt-4">
  <div class="col">
    <div class="row justify-content-center">
      <a class="btn btn-link btn-lg" href="getmyip.html" role="button">My IP Information</a>
      <a class="btn btn-link btn-lg" href="ipcalc.html" role="button">IP Adddress Calculator</a>
      <a class="btn btn-link btn-lg" href="hosttoip.html" role="button">Host to IP Address</a>
      <a class="btn btn-link btn-lg" href="iptodec.html" role="button">IP Address to Decimal</a>
      <a class="btn btn-link btn-lg" href="iptobin.html" role="button">IP Address to Binary</a>
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