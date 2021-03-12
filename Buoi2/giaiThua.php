<?php 
    function giaiThua($x){
        if ($x == 1)
            return 1;
        else {
            return giaiThua($x - 1) * $x;
        }
    }
    $number = 4;
    echo " " . $number . "! = " . giaiThua($number) ." "; 
?>