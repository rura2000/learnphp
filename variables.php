<?php
    
    echo"Динамічне присвоювання значення змінних<br /><br />";

    $id_menu = 3;
    eval("\$active$id_menu = true;");
    if (isset($active3)) {
    echo "Змінна \$active3 існує та рівна $active3 <br /><br />";
    }


    echo"Округлення числа round, ceil, floor <br /><br />";

    $a=round(42.43752,2);
    echo "$a <br /><br />";

    echo"Переведення числа з десятичного вигляду у двійковий decbin і навпаки bindec <br /><br />";

    $b = decbin(4252);
    $c= decbin(89080);
    echo" 4252 у двійковому вигляді = $b || 89080 у двійковому вигляді =  $c";

?>