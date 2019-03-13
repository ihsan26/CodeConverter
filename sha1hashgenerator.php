<?php
require_once 'functions/web.php';

if (isset($_POST['convert'])) {
  $input = $_POST['input'];
  $hasil = sha1hash($input);
} 

require_once "views/header.php";
?>

<div class="row margin-atas" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
      <ul class="list-group">
        <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
          <small>MAIN MENU</small>
        </li>
        <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fa fa-dashboard fa-fw mr-3"></span>
            <span class="menu-collapsed">Number Converter</span>
            <span class="submenu-icon ml-auto"></span>
          </div>
        </a>
        <div id='submenu1' class="sidebar-submenu collapse">
          <a href="dectobin.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Decimal to Binary Converter</span>
          </a>
          <a href="dectohex.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Decimal to Hexadecimal Converter</span>
          </a>
          <a href="dectooct.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Decimal to Octal Converter</span>
          </a>
          <a href="bintodec.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Binary to Decimal Converter</span>
          </a>
          <a href="bintooct.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Binary to Octal Converter</span>
          </a>
          <a href="bintohex.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Binary to Hexadecimal Converter</span>
          </a>
          <a href="octtodec.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Octal to Decimal Converter</span>
          </a>
          <a href="octtobin.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Octal to Binary Converter</span>
          </a>
          <a href="octtohex.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Octal to Hexadecimal Converter</span>
          </a>
          <a href="hextodec.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Hexadecimal to Decimal Converter</span>
          </a>
          <a href="hextobin.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Hexadecimal to Binary Converter</span>
          </a>
          <a href="hextooct.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Hexadecimal to Octal Converter</span>
          </a>
        </div>

        <a href="#submenu2" data-toggle="collapse" aria-expanded="true" class=" list-group-item list-group-item-action flex-column align-items-start collapsed">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fa fa-maxcdn fa-fw mr-3"></span>
            <span class="menu-collapsed">String Converter</span>
            <span class="submenu-icon ml-auto"></span>
          </div>
        </a>
        <div id='submenu2' class="sidebar-submenu collapse show">
          <a href="strtobin.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">String To Binary</span>
          </a>
          <a href="bintostr.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Binary To String</span>
          </a>
          <a href="cipher.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Cipher Encryption</span>
          </a>
          <a href="md5hashgenerator.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">MD5 Hash Generator</span>
          </a>
          <a href="sha1hashgenerator.html" class="active list-group-item list-group-item-action">
            <span class="menu-collapsed">SHA1 Hash Generator</span>
          </a>
          <a href="base64encode.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Base64 Encode</span>
          </a>
          <a href="base64decode.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Base64 Decode</span>
          </a>
        </div>
        <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class=" list-group-item list-group-item-action flex-column align-items-start collapsed">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fa fa-superscript fa-fw mr-3"></span>
            <span class="menu-collapsed">IP Address Tools</span>
            <span class="submenu-icon ml-auto"></span>
          </div>
        </a>
        <div id='submenu3' class="sidebar-submenu collapse">
          <a href="getmyip.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">My IP Information</span>
          </a>
          <a href="ipcalc.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">IP Address Calculator</span>
          </a>
          <a href="hosttoip.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Host to IP Address Converter</span>
          </a>
          <a href="iptodec.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">IP Address to Decimal Converter</span>
          </a>
          <a href="iptobin.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">IP Address To Binary Converter</span>
          </a>
        </div>
      </ul>
    </div>

    <div class="col-sm-9">
      <h5 class="border-dark border-bottom pt-4 pb-4 text-secondary font-weight-bold">SHA1 Hash Generator</h5>
      <!-- MAIN -->
      <?php require_once "views/main.php"; ?>
       <div class="col-sm-4">
        <div class="bd-bq">
          <h6>Catatan:</h6>
          <figcaption class="figure-caption font-weight-light">
          <p>SHA1 atau Secure Hash Algorithm 1 merupakan salah satu algoritma hashing yang sering digunakan untuk enkripsi data. Hasil dari sha1 adalah data dengan lebar 20 byte atau 160 bit, biasa ditampilkan dalam bentuk bilangan heksadesimal 40 digit.</p>
          <p><strong>Contoh:</strong> 0a4d55a8d778e5022fab701977c5d840bbc486d0</p>
          </figcaption>
        </div>
      </div>
      <!-- tag penutup main -->
    </div>  
  </div>
  <?php require_once "views/footer.php"; ?>