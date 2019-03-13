  <div class="row">
    <div class="col-sm-8" >
          <form action="" method="post">
            <label for="exampleFormControlTextarea1" class="font-weight-bold">Masukkan angka atau text yang akan dikonversi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="input" cols="50" placeholder="Write your code"><?= isset($_POST['convert'])? $input: ''; ?></textarea>
            <div class="text-center mt-3 mb-2">
              <button type="convert" name="convert" class="convert btn btn-custom btn-lg">Convert</button>
            </div>
          </form>
        <label for="exampleFormControlTextarea2" class="font-weight-bold">Hasil angka atau text yang dikonversi:</label>
        <textarea class="form-control" id="exampleFormControlTextarea2" rows="10" cols="50" placeholder="Output"><?= isset($_POST['convert'])? $hasil: ''; ?></textarea>
    </div>