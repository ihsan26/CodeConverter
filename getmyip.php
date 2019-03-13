<?php
require_once 'functions/web.php';

$ip = getRealIpAddr();
$myip = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='. $ip));

require_once "views/header.php";
?>

<div class="row margin-atas" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
      <ul class="list-group">
        <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
          <small>MAIN MENU</small>
        </li>
        <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action flex-column align-items-start collapsed">
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

        <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class=" list-group-item list-group-item-action flex-column align-items-start collapsed">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fa fa-maxcdn fa-fw mr-3"></span>
            <span class="menu-collapsed">String Converter</span>
            <span class="submenu-icon ml-auto"></span>
          </div>
        </a>
        <div id='submenu2' class="sidebar-submenu collapse">
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
          <a href="sha1hashgenerator.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">SHA1 Hash Generator</span>
          </a>
          <a href="base64encode.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Base64 Encode</span>
          </a>
          <a href="base64decode.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">Base64 Decode</span>
          </a>
        </div>
        <a href="#submenu3" data-toggle="collapse" aria-expanded="true" class=" list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-start align-items-center">
            <span class="fa fa-superscript fa-fw mr-3"></span>
            <span class="menu-collapsed">IP Address Tools</span>
            <span class="submenu-icon ml-auto"></span>
          </div>
        </a>
        <div id='submenu3' class="sidebar-submenu collapse show">
          <a href="getmyip.html" class="active list-group-item list-group-item-action">
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
      <h5 class="border-dark border-bottom pt-4 pb-4 text-secondary font-weight-bold">IP Address Information</h5>
      <!-- MAIN -->
      <div class="row justify-content-center">
        <div class="col-sm-9">
          <div class="card text-center mt-3">
            <div class="card-header">
              <h2>Your IP Information</h2>
            </div>
            <div class="card-body">
              <div class="card-title">
                <h3>
                  <?= "Your IPv4 Address is: " . $ip ?>
                </h3>
              </div>
              <p class="card-text">
                <?= "Your Local IP is: ". getHostByName(getHostName()); ?>
              </p>
              <p class="card-text">
                <?= "Hostname: ". gethostbyaddr($ip); ?>
              </p>
              <p class="card-text">
                <?= "Location: ". $myip['geoplugin_city'] . ' - ' . $myip['geoplugin_region'] ?>
              </p>
              <p class="card-text">
                <?= "Country: ". $myip['geoplugin_countryName'] . ', - ' . $myip['geoplugin_countryCode']; ?>
              </p>
              <p class="card-text">
                <?= "Time Zone: ". $myip['geoplugin_timezone']; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      </div>

      <?php require_once "views/footer.php"; ?>