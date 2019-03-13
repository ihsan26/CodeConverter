<?php
require_once 'functions/web.php';

if (isset($_POST['convert'])) {
  $input = $_POST['input'];
  $hasil = (is_numeric($input)? decToBin($input): 'Bilangan desimal tidak valid');
} 

require_once "views/header.php";
?>
 
  <?php require_once "views/sidebar.php"; ?>
  
    <div class="col-sm-9">
      <h5 class="border-dark border-bottom pt-4 pb-4 text-secondary font-weight-bold">Decimal to Binary Converter</h5>
      <!-- MAIN -->
      <?php require_once "views/main.php"; ?>
      <div class="col-sm-4">
        <div class="bd-bq">
          <h6>Catatan:</h6>
          <figcaption class="figure-caption font-weight-light"><p class="text-justify">Cara konversi bilangan desimal ke bilangan biner yaitu dengan membagi bilangan desimal ke basis bilangan biner yaitu 2, hasilnya kemudian dibulatkan kebawah dan sisa hasil pembagiannya disimpan. Lakukan pembulatan kebawah tersebut hingga nilainya mencapai nol. Sisa pembagiannya tersebut kemudian diurutkan dari yang paling akhir hingga yang paling awal.</p>
          <span class="font-weight-normal">Contoh:</span>
          <p>50<sub>10</sub> = ... <sub>2</sub></p> 
          <p>50/2 = 25 sisa bagi adalah <b>0</b><br>
              25/2 = 12 sisa bagi adalah <b>1</b><br>
              12/2 = 6 sisa bagi adalah <b>0</b><br>
              6/2  = 3 sisa bagi adalah <b>0</b><br>
              3/2 = <b>1</b> sisa bagi adalah <b>1</b></p>
          <p>Jadi, 50<sub>10</sub> = 110010<sub>2</sub></p> 
          </figcaption>
        </div>
      </div>
      <!-- tag penutup main -->
    </div>  
  </div>
      <?php require_once "views/footer.php"; ?>