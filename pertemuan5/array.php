<?php
/* ARRAY
   adalah variabel yang dapat memiliki banyak nilai.
   elemen pada array boleh memiliki tipe data yang berbeda.
   pasangan antara key dan value
   keynya adalah index, yang dimulai dari 0
*/
// membuat array cara lama
$hari = array("senin", "selasa", "rabu", "kamis", "jumat");
// cara baru
$bulan = ["januari", "februari", "maret", "april"];

// menampilkan array (tidak bisa pake echo) tapi pake var_dump() atau print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);    // lebih ringkas
echo "<br>";

// menampilkan 1 elemen pada array
echo $bulan[1];
echo "<br>";

// tambah elemen baru pada array
$bulan[] = "mei";
$bulan[] = "juni";
print_r($bulan);


?>