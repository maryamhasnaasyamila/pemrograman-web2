<?php require_once "proses_registrasi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container" style="padding: 2.5vw 1vw 1vw 1vw">
        <h2>Form Input IT Club GDSC</h2>
        <br>
        <form method="POST">
          <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-address-card-o"></i>
                  </div>
                </div> 
                <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control" required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-user-circle"></i>
                  </div>
                </div> 
                <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="domisili" class="col-4 col-form-label">Domisili</label> 
            <div class="col-8">
              <select id="domisili" name="domisili" class="custom-select" required="required">
                <?php 
                    foreach ($domisili as $dom) { ?>
                        <option value="<?= $dom; ?>"><?= $dom; ?></option>
                <?php } ?>

              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Laki-laki" required="required"> 
                <label for="jenis_kelamin_0" class="custom-control-label">Laki-laki</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Perempuan" required="required"> 
                <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
            <div class="col-8">
              <select id="prodi" name="prodi" class="custom-select" required="required">
              <?php 
                    foreach ($prodi as $key => $value) { ?>
                        <option value="<?= $key;?>"><?= $value; ?></option>
              <?php } ?>

              </select>
            </div>
          </div>
          <div class="form-group row"  required="required">
            <label class="col-4">Skill Programming</label> 
            <div class="col-8">

            <?php foreach ($skills as $key => $value) { ?>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input name="skill[]" id="<?= $key; ?>" type="checkbox" class="custom-control-input" value="<?= $key; ?>">
                <label for="<?= $key; ?>" class="custom-control-label"><?= $key; ?></label>
              </div>
            <?php } ?>

            </div>
          </div>

          <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-snapchat-square"></i>
                  </div>
                </div> 
                <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control">
              </div>
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>

        <hr>
        <br>

        <table class="table table-bordered text-center">
            <tr class="table-primary text-uppercase">
                <th>nim</th>
                <th>nama</th>
                <th>email</th>
                <th>jenis kelamin</th>
                <th>domisili</th>
                <th>prodi</th>
                <th>skill</th>
                <th>score</th>
                <th>keterangan</th>
            </tr>

            <?php 
                if(isset($_POST['submit'])){
                    $nim = $_POST['nim'];
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $jenis_kelamin = $_POST['jenis_kelamin'];
                    $domisili = $_POST['domisili'];
                    $prodi = $_POST['prodi'];
                    $skill_user = $_POST['skill'];
            ?>

            <tr>
                <td><?= $nim; ?></td>
                <td><?= $nama; ?></td>
                <td><?= $email; ?></td>
                <td><?= $jenis_kelamin; ?></td>
                <td><?= $domisili; ?></td>
                <td><?= $prodi; ?></td>
                <td><?php foreach($skill_user as $skill) {echo $skill . ", ";}; ?></td>
                <td><?= $score; ?></td>
                <td><?= $ket; ?></td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <hr>
        <br>
        <footer class="text-center" style="color: gray;">&copy Maryam Hasnaa' Syamila STT-NF 22TI03</footer>
        <br>
    </div>
</body>
</html>