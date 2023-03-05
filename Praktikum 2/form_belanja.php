<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div style="display: flex; margin-left: 12px; margin-top:25px">
    <div class="container">
        <h3>Belanja Online </h3>
        <form method="POST">
			<div class="form-group row">
				<label for="name" class="col-4 col-form-label">Nama Customer</label> 
				<div class="col-8">
				<input id="customer" name="customer" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-4">Pilih Produk</label> 
				<div class="col-8">
				<div class="custom-control custom-radio custom-control-inline">
					<input name="Produk" id="Produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
					<label for="Produk_0" class="custom-control-label">TV</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input name="Produk" id="Produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
					<label for="Produk_1" class="custom-control-label">Kulkas</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input name="Produk" id="Produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
					<label for="Produk_2" class="custom-control-label">Mesin Cuci</label>
				</div>
				</div>
			</div>
			<div class="form-group row">
				<label for="Jumlah" class="col-4 col-form-label">Jumlah</label> 
				<div class="col-8">
				<input id="Jumlah" name="Jumlah" placeholder="Masukan Jumlah" type="text" class="form-control" required="required">
				</div>
			</div> 
			<div class="form-group row">
				<div class="offset-4 col-8">
				<button name="submit" type="submit" class="btn btn-success">submit</button>
				</div>
			</div>
			</form>
		</div>
		<aside style="margin-right: 50px; padding-right:80px">
            <div>
                <table class="table">
                    <tr class="table-secondary">
                        <th>Daftar Harga</th>
                    </tr>
                    <tr>
                        <td>TV : 3.800.000</td>
                    </tr>
                    <tr>
                        <td>Kulkas : 4.500.000</td>
                    </tr>
                    <tr>
                        <td>Mesin Cuci : 2.500.000</td>
                    </tr>
                    <tr class="table-primary">
                        <th>HARGA DAPAT BERUBAH SETIAP SAAT! </th>
                    </tr>
                </table>
            </div>
        </aside>
	</div>
	<?php 

	if (isset($_POST['submit'])) {
		$nama = $_POST['customer'];
		$produk = $_POST['Produk'];
		$jumlah = $_POST['Jumlah'];
		if ($produk == "TV"){
			$total = $jumlah * 3800000;
		} elseif ($produk == "Kulkas") {
			$total = $jumlah * 4500000;
		} elseif ($produk == "Mesin Cuci") {
			$total = $jumlah * 2500000;
		}
	?>
	<div class="container">
	<table class="table table-bordered" style="text-align: center;">
		<tr class="table-info">
			<th>Nama Customer</th>
			<th>Produk</th>
			<th>Jumlah</th>
			<th>Harga</th>
		</tr>
		<tr class="table-primary">
			<td><?= $nama; ?></td>
			<td><?= $produk; ?></td>
			<td><?= $jumlah; ?></td>
			<td><?= 'Rp.' .number_format ($total, 0, '.', '.');?></td>
		</tr>
	</table>
	</div>
<?php } ?>

 
</body>
</html>