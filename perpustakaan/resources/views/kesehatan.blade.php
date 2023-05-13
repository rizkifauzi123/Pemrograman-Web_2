<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="text" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="tgl_p">Tanggal Pemeriksaan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-clock-o"></i>
          </div>
        </div> 
        <input id="tgl_p" name="tgl_p" type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_0" type="checkbox" class="custom-control-input" value="Pria"> 
        <label for="checkbox_0" class="custom-control-label">Pria</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_1" type="checkbox" class="custom-control-input" value="Wanita" > 
        <label for="checkbox_1" class="custom-control-label">Wanita</label>
      </div>
    </div>
  </div> 
</form>
<hr>
<table border="1" width="80%" align="center">
    <thead align="center">
        <th>Jenis Tes</th>
        <th>Hasil Pemeriksaan</th>
        <th>Normal</th>
    </thead>
    <tbody align="center">
        <tr>
            <td>Tekanan Darah</td>
            <td>140/150 mmhg</td>
            <td>120/80 mmhg</td>
        </tr>
        <tr>
            <td>Asam Urat</td>
            <td>4 mg/dl/7 mg/dl</td>
            <td>7 mg/dl 6 mg/dl</td>
        </tr>
        <tr>
            <td>Kolestrol Total</td>
            <td>100 mg/dl</td>
            <td>200 mg/dl</td>
        </tr>
        <tr>
            <td>Gula darah</td>
            <td>90 mg/dl</td>
            <td>Puasa: 700-110 mg/dl</td>
        </tr>
    </tbody>


</table>

</body>
</html>
