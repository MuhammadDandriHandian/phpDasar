<?php
// Sintaks PHP

/* Standar Output : untuk mencetak sesuatu ke layar
   - echo, print
   - print_r : untuk array
   - var_dump : untuk melihat isi dalam variable
*/
echo "Dandri Handian";

/* Penulisan sintaks PHP
   1. PHP di dalam HTML 
   contoh :
   <body>
   <h1> Hai, Selamat datang <?php echo $nama ?>
   </body>
// 2. HTML di dalam PHP (tidak disarakan)
   contoh :
   <?php
   echo "<h1>Hai, Selamat datang Dandri Handian</h1>"
   ?>
*/

/* Variabe dan Tipe Data
   1. Variabel : tidak boleh diawali dengan angka, tapi boleh mengandung angka.
   tidak boleh ada spasi 
   contoh : 
   $nama = "Dandri handian";

   echo "halo, nama saya $nama"; : maka outputnya = halo, nama saya Dandri Handian
   echo 'halo, nama saya $nama'; : maka outputnya = halo, nama saya $nama
   ini disebut interpolasi tidak jalan karna pake kutip satu

   2. Operator
   - aritmatika + - * / %
   contoh :
   $x = 10;
   $ y = 20;
   echo $x * $y : maka outputnya hasil dari 10 kali 20

   - concat / penggabung string .
   contoh :
   $nama_depan = "Dandri";
   $nama_belakang = "Handian";
   echo "$nama_depan . " " . $nama_belakang;

   - assigment =, +=, *=, /=, %=, .=
   contoh : 
   $x = 1;
   $x += 5;
   echo $x; 
   maka outputnya 6 karena 1 ditambah 5
   
   contoh :
   $nama = "Dandri";
   $nama .= " ";
   $nama .= "Handian";
   echo $nama;
   maka hasilnya "Dandri Handian"

   - perbandingan <, >, <=, >=, ==, !=
   contoh :
   var_dump(1 == 5);
   maka output menghasilkan boolean "bool(false)"

   contoh :
   var_dump(2 == "2");
   maka output "bool(true)" karena hanya mengecek nilai tapi tidak mengecek tipe data
   untuk mengecek tipe data harus menggunakan operator identitas

   - identitas ===, !==
   contoh :
   var_dump(1 === "1");
   maka output "bool(false)" karena berbeda tipe data

   - logika && (and), || (or), ! (not)
   contoh :
   $x = 10;
   var_dump$x < 20 $$ $x % 2 == 0);
   maka output "bool(true)" karna dua kondisi perbandingan tersebut bernilai benar

   contoh :
   $x = 30;
   var_dump$x < 20 || $x % 2 == 0);
   maka output "bool(true)" karena ada salah satu kondisi yang benar
?>
