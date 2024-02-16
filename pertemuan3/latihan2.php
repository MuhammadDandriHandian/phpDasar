<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan pake while</title>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="5">
        <?php 
        $i = 1;
        while ($i <= 3) :
        ?>
        <tr>
            <?php 
            $j = 1;
            while ($j <= 5) :
            ?>
            <td><?php echo "$i, $j"; ?></td>
            <?php $j++; endwhile; ?>
        </tr>
        <?php $i++; endwhile; ?>

    </table>
    
</body>
</html>