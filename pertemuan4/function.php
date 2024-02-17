<?php
function salam($waktu = "Datang", $nama = "User"){
    return "Selamat $waktu, $nama!";
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan function</title>
</head>
<body>
    <h1>
        <?php echo salam(); ?>
    </h1>
    <h1>
        <?= salam("Pagi", "Dandri"); ?>
    </h1>
    
</body>
</html>
