<?php 
/*  ARRAY ASSOCIATIVE
    Definisinya sama seperti array numerik, kecuali keynya adalah string yang kita buat sendiri
    Gak akan ketukar asal keynya benar
*/
$mahasiswa = [
            [
                "nama" => "M Dandri Handian",
                "nim" => "10118062",
                "email"=> "mdhandian@gmail.com"
            ],
            [
                "nim" => "3384833",
                "nama" => "Alya Saharian",
                "email"=> "alyan@gmail.com"
            ]
            ];
echo $mahasiswa[1]["nama"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama :
                <?php echo $mhs["nama"]; ?>
            </li>
            <li>Nim :
                <?php echo $mhs["nim"]; ?>
            </li>
            <li>Email :
                <?php echo $mhs["email"]; ?>
            </li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>

