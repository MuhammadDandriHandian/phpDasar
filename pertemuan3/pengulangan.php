<?php
// PENGULANGAN
// for
for($i = 1; $i <= 5; $i++){
    echo "Hello world pake for<br>";
}

// while
$j = 1;
while($j <= 5){
    echo "Hello world pake while <br>";
$j++;
}

// do while (walaupun kondisi tidak memenuhi tapi akan menjalankan dulu satu kali)
$k = 6;
do {
    echo "Hello world pake do while";
$k++;
} while ($k < 5);
?>