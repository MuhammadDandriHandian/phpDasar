<?php
// FUNGSI YANG SUDAH ADA DI LIBRARY PHP
/* DATE
   - untuk menampilkan tanggal dengan format tententu
*/
echo date("l, d-M-Y");

echo "<br>";

/* TIME
   - UNIX Timestamp / EPOCH time : adalah detik yang sudah berlalu sejak 1 Januari 1970
 */
echo time();

echo "<br>";

// mencari tahu 100 hari kedepan hari apa menggunakan date dan time
echo date("d M Y", time()+60*60*24*100);

echo "<br>";

/* MKTIME
   - membuat sendiri detik
   - mktime(0,0,0,0,0,0) meliputi (jam, menit, detik, bulan, tanggal, tahun) 
 */
// mencari hari dengan tanggal tertentu
echo date("l", mktime(0,0,0,5,26,2000));

echo "<br>";

/* STROTIME
  - hampir sama seperti mktime tapi masukannya string
*/
// mencari hari dengan tanggal tertentu
echo date("l", strtotime("26 may 2000"));

?>
