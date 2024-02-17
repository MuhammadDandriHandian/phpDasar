<?php
$box = [1,2,3,4,5,6,7,8,9];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: blue;
            text-align: center;
            line-height: 50px;
            float: left;
            margin: 5px;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php for($i = 0; $i < count($box); $i++) : ?>
        <div class="kotak">
            <?php echo $box[$i]; ?>
        </div>
    <?php endfor; ?>

    <div class="clear"></div>
    
    <!-- pake foreach lebih ringkas-->
    <?php foreach($box as $a) : ?>
        <div class="kotak">
            <?= $a; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>