<?php require_once "class_bmi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 7 Rizki Ahmad Fauzi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2>Form BMI Mahasiswa</h2>
        <form method="POST">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-4 col-form-label">Umur</label> 
                <div class="col-8">
                <input id="umur" name="umur" placeholder="Masukkan Umur" type="number" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Pria" required="required"> 
                    <label for="jenis_kelamin_0" class="custom-control-label">Pria</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Wanita" required="required"> 
                    <label for="jenis_kelamin_1" class="custom-control-label">Wanita</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="berat_badan" class="col-4 col-form-label">Berat Badan</label> 
                <div class="col-8">
                <input id="berat_badan" name="berat_badan" placeholder="Masukkan Berat Badan" type="number" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="tinggi_badan" class="col-4 col-form-label">Tinggi Badan</label> 
                <div class="col-8">
                <input id="tinggi_badan" name="tinggi_badan" placeholder="Masukkan Tinggi Badan" type="number" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-warning">Submit</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <tr class="table-success test-uppercase">

                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Hasil BMI</th>
                <th>Status BMI</th>


            </tr>
            <?php
            if(isset($_POST['submit'])){
                
                $nama = $_POST['nama'];
                $umur = $_POST['umur'];
                $jenis_kelamin = $_POST['jenis_kelamin'];
                $berat = $_POST['berat_badan'];
                $tinggi = $_POST['tinggi_badan'];
               

            $bmi = new bmi($nama, $umur, $jenis_kelamin, $berat, $tinggi);
         
            ?>

            <tr>
                <td><?= $bmi->nama; ?></td>
                <td><?= $bmi->umur; ?></td>
                <td><?= $bmi->jenis_kelamin; ?></td>
                <td><?= $bmi->berat; ?></td>
                <td><?= $bmi->tinggi; ?></td>
                <td><?= $bmi->bmi(); ?></td>
                <td><?= $bmi->ketBMI(); ?></td>


            </tr>
        </table>
        <?php } ?>
    </div>
</body>
</html>