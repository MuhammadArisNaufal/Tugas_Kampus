<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <div class="container" style="padding-top: 3rem;">


     <form action="proses_registrasi.php" method="POST">
          <fieldset style="border: 1px solid black; padding: 2rem;">
            <legend>Form Registrasi IT Club Data Science</legend>
          <div class="form-group row">

            <label for="nim" class="col-4 col-form-label">NIM</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-check-square"></i>
                  </div>
                </div> 
                <input id="nim" name="nim" type="number" class="form-control" require>
              </div>
            </div>

          </div>
          <div class="form-group row">

            <label for="namaLengkap" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-address-book"></i>
                  </div>
                </div> 
                <input id="namaLengkap" name="namaLengkap" type="text" class="form-control" require>
              </div>
            </div>

          </div>
          <div class="form-group row">

            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="laki" type="radio" class="custom-control-input" value="L"> 
                <label for="laki" class="custom-control-label">Laki-Laki</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="wanita" type="radio" class="custom-control-input" value="P"> 
                <label for="wanita" class="custom-control-label">Perempuan</label>
              </div>
            </div>

          </div>
          <div class="form-group row">

            <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
            <div class="col-8">
              <select id="prodi" name="prodi" class="custom-select" require>
              <?php
              $programStudi = [
                  "SI" => "Sistem Informasi",
                  "TI" => "Teknik Informatika",
                  "BD" => "Bisnis Digital"
              ];

              foreach ($programStudi as $kode => $nama) {
                  echo "<option value='$kode'>$nama</option>";
              }
              ?>
              </select>
            </div>
            
          </div>
          <div class="form-group row">

            <label class="col-4">Skill Web dan Programming</label> 
            <div class="col-8">

            <?php
            $skills = [
                "HTML" => 10,
                "CSS" => 10,
                "JavaScript" => 20,
                "RWD Bootstrap" => 20,
                "PHP" => 30,
                "Python" => 30,
                "Java" => 50
            ];

            foreach ($skills as $skill => $skor) {
              echo "<div class='custom-control custom-checkbox custom-control-inline'><input name='skills[$skill]' id='$skill' type='checkbox' class='custom-control-input' value='$skor'><label for='$skill' class='custom-control-label'>$skill</label></div>";
          }
          
            ?>
             </div>
          </div>
          <div class="form-group row">

            <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
            <div class="col-8">
              <select id="domisili" name="domisili" class="custom-select" require>
              <?php
                $domisiliOptions = ["Jakarta", "Depok", "Bogor", "Tangerang", "Bekasi", "Lainnya"];

                foreach ($domisiliOptions as $domisili) {
                    echo "<option value='$domisili'>$domisili</option>";
                }
                ?>
              </select>
            </div>

          </div>
          <br>
          <div class="form-group row">

            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-check-square"></i>
                  </div>
                </div> 
                <input id="email" name="email" type="email" class="form-control" require>
              </div>
            </div>

          </div> 

          <div class="row">

            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </body>
</html>
