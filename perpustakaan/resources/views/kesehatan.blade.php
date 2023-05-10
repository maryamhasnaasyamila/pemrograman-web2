@php
    $title = "Tes Kesehatan";
    $name = "Nama";
    $date = "Tanggal Pemeriksaan";
    $age = "Usia";
    $gender = "Jenis Kelamin";
    $gender1 = "Laki-laki";
    $gender2 = "Perempuan";


@endphp
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container" style="margin: 1vw;">
    <h1>{{ $title }}</h1>
    <form action="">
        <div class="form-group row">
            <label for="name" class="col-4 col-form-label">{{ $name }}</label> 
            <div class="col-8">
              <input id="name" name="name" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
          <label for="date" class="col-4 col-form-label">{{ $date }} </label> 
          <div class="col-8">
            <input id="date" name="date" type="date" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="age" class="col-4 col-form-label">{{ $age }} </label> 
          <div class="col-8">
            <input id="age" name="age" type="number" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">{{ $gender }}</label> 
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki-laki" required="required"> 
              <label for="gender_0" class="custom-control-label">{{ $gender1 }}</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Perempuan" required="required"> 
              <label for="gender_1" class="custom-control-label">{{ $gender2 }}</label>
            </div>
          </div>
        </div> 
    </form>
    <br> <hr> <br>

    <div class="container" style="margin-left:12vw; margin-right:12vw;">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Hasil Tes</h1>
                <table border="2" class="table mx-auto" style="text-align:center;">
                    <tr>
                        <th>Jenis Tes</th>
                        <th>Hasil Pemeriksaan</th>
                        <th>Normal</th>
                    </tr>
                    <tr>
                        <td class="text-center">Tekanan Darah</td>
                        <td class="text-center">110/80</td>
                        <td class="text-center">120/80 mmhg</td>
                    </tr>
                    <tr>
                        <td class="text-center">Asam Urat</td>
                        <td class="text-center">130</td>
                        <td class="text-center">7 mg</td>
                    </tr>
                    <tr>
                        <td class="text-center">Kolesterol Total</td>
                        <td class="text-center">190</td>
                        <td class="text-center">200 mg/dl</td>
                    </tr>
                    <tr>
                        <td class="text-center">Gula Darah</td>
                        <td class="text-center">90</td>
                        <td class="text-center">Puasa: 70-110 mg/dl</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

