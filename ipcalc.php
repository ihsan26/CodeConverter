<?php

if (isset($_POST['submit'])){
    $ip = $_POST['ip'];
    $cidr = $_POST['cidr']; 
    $IpFile = file_get_contents("https://api.banghasan.com/domain/subnetcalc/".$ip."/".$cidr);
    $result = json_decode($IpFile, true);
    $result = $result['hasil'];
    $result = explode('=', $result);

    function getResult($key){
        global $result;
        return implode(" ", array_slice(explode("\n", $result[$key]), 0, 1));
    }
}
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
          <a href="getmyip.html" class="list-group-item list-group-item-action">
            <span class="menu-collapsed">My IP Information</span>
          </a>
          <a href="ipcalc.html" class="active list-group-item list-group-item-action">
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
      <h5 class="border-dark border-bottom pt-4 pb-4 text-secondary font-weight-bold">IP Address Calculator</h5>
      <!-- MAIN -->
      <div class="col-sm-8 mt-4">
        <form action="" method="post">
          <div class="form-row">
            <div class="col-6">
              <input type="text" class="form-control" name="ip" placeholder="IP Address" value="<?= isset($_POST['submit'])? $ip: ''; ?>">
            </div>
              <span class="mt-1">/</span>
            <div class="col-2">
              <input type="text" class="form-control" name="cidr" placeholder="CIDR" value="<?= isset($_POST['submit'])? $cidr: ''; ?>">
            </div>
            <button class="btn btn-custom" type="submit" name="submit">Submit</button>
          </div>
        </form>
        <div class="row mt-5">
          <div class="col-4">
            <span>Subnet Mask</span>
          </div>
          <div class="col-1">:</div>
          <div class="col-5">
          <?= isset($_POST['submit'])? getResult(3) : '-'; ?>
          </div>
			</div>
      <br>
      <div class="row">
          <div class="col-4">
            <span>Network Address</span>
          </div>
          <div class="col-1">:</div>
          <div class="col-5">
          <?= isset($_POST['submit'])? getResult(2): '-'; ?>
          </div>
			</div>
      <br>
      <div class="row">
          <div class="col-4">
            <span>Broadcast Address</span>
          </div>
          <div class="col-1">:</div>
          <div class="col-5">
          <?= isset($_POST['submit'])? getResult(4): '-'; ?>
          </div>
			</div>
      <br>
      <div class="row">
          <div class="col-4">
            <span>Wildcard Mask</span>
          </div>
          <div class="col-1">:</div>
          <div class="col-5">
          <?= isset($_POST['submit'])? getResult(5): '-'; ?>
          </div>
			</div>
      <br>
      <div class="row">
          <div class="col-4">
            <span>Hosts Bits</span>
          </div>
          <div class="col-1">:</div>
          <div class="col-5">
          <?= isset($_POST['submit'])? getResult(6): '-'; ?>
          </div>
			</div>
      <br>
      <div class="row">
          <div class="col-4">
            <span>Max. Hosts</span>
          </div>
          <div class="col-1">:</div>
          <div class="col-5">
          <?= isset($_POST['submit'])? getResult(7): '-'; ?>
          </div>
        </div>
        <br>
      <div class="row">
          <div class="col-4">
            <span>Host Range</span>
          </div>
          <div class="col-1">:</div>
          <div class="col-5">
          <?= isset($_POST['submit'])? getResult(8): '-'; ?>
          </div>
        </div>
      </div>
    </div>
 <?php require_once "views/footer.php"; ?>