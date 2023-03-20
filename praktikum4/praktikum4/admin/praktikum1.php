<?php

require_once "layouts/header.php";
require_once "layouts/menu.php";
?>
<?php 
$mahasiswa1 = [
    'id'=>1,
    'nim'=>9803280,
    'uts'=>90,
    'uas'=>95,
    'tugas'=>90,
];
$mahasiswa2 = [
    'id'=>2,
    'nim'=>982716,
    'uts'=>90,
    'uas'=>95,
    'tugas'=>90,
];
$mahasiswa3 = [
    'id'=>3,
    'nim'=>123441,
    'uts'=>90,
    'uas'=>95,
    'tugas'=>91,
];

$ar_nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3];



?>
<div class="container">
        <h2>Daftar Nilai Mahasiswa</h2>
        <table class="table table-stripped">
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
            </tr>
            <?php foreach($ar_nilai as $nilai){ ?>
            <tr>
                <td><?= $nilai['id'];?></td>
                <td><?= $nilai['nim'];?></td>
                <td><?= $nilai['uts'];?></td>
                <td><?= $nilai['uas'];?></td>
                <td><?= $nilai['tugas'];?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
<?php 
require_once "layouts/footer.php";
?>