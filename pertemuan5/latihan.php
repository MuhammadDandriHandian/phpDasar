<?php 
$mahasiswa = [["Muhammad Dandri Handian", "Teknik Informatika", 10118062, "mdhandian@gmai.ocm"],
              ["Ahmad Naufal Yasin", "Ilmu Komunikasi", 20229018, "naufal@yahoo.co.id"],
              ["Resti Linuhung", "Ilmu Kedokteran", 23926393, "resti@gmai.com"]   
            ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array multi dimensi</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama :
                <?php echo $mhs[0]; ?>
            </li>
            <li>Jurusan :
                <?php echo $mhs[1]; ?>
            </li>
            <li>Nim :
                <?php echo $mhs[2]; ?>
            </li>
            <li>Email :
                <?php echo $mhs[3]; ?>
            </li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>