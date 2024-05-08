<?php
    $names = ['компьютер', 'компьютеров', 'компьютера'];
    $num = 121;

    $numtext = str_split($num);

    if (end($numtext) == 1){
        echo $num . ' ' . $names[0];
    } else if (end($numtext) == 2 OR end($numtext) == 3 OR end($numtext) == 4) {
        echo $num . ' ' . $names[2];
    } else {
        echo $num . ' ' . $names[1];
    }
?>