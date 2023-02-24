<?php 
//  ini sebuah komentar 
/* ini juga sebuah komentar */
# komentar pake simbol kress
// Di php jika memanggil kata atau tulisan menggunakan (echo) berbeda dengan html, html menggunakan h1 dan lain lain 

echo "Hello World <br>";
print_r("Rizki Ahmad Fauzi <br>");
var_dump("STT Nurul Fikri");
echo "<hr>"; 

$nama = "Rizki Ahmad Fauzi";
$umur = 20;
//umur tipe data integer 
$berat = 60.2;
//berat tipe data float 
$mahasiswa = true;
//mahasiswa tipe data bolean 

echo "Nama saya $nama <br>";
echo "Umur saya sekarang $umur tahun <br>";
echo "Berat badana saya $berat kg";
echo "hr";


//membuat array 
// array ada dua macam = array asosiatif sama numeric
$programs = ["php","javascript","html","CSS"];
echo $programs[0];

?>