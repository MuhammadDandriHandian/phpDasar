<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assosiative Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: coral;
            margin: 3px;
            text-align: center;
            line-height: 50px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php 
    $angka = [1,2,3,4,5,6,7,8,9];
    ?>

    <?php foreach($angka as $a) : ?>
        <div class="kotak">
            <?php echo $a; ?>
        </div>
    <?php endforeach; ?>    

    <div class="clear"></div>

    <?php 
    // Array multi dimensi
    $nomor = [[1,2,3], ["dandri", "abdul", "dilan"], [1011,1029,2930]];

    // menampilkan array index ke 0 dari array index ke 1
    echo $nomor[1][0];
    ?>

    <div class="clear"></div>

    <!-- menampilkan semuanya -->
    <?php foreach($nomor as $n) : ?>
        <?php foreach($n as $b) : ?>
            <div class="kotak">
                <?php echo $b; ?>
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>

    <div class="clear"></div>
    
</body>
</html>

