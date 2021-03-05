<?php 
function ktrachiahet3($number){
    if ($number %3 == 0){
        echo "</br> Số " . $number . " Chia hết 3";
    }
    else 
    {
        echo "</br> Số " . $number . " chia 3 dư " . ($number % 3) . ' ' ;
    }
};
 $list_number = array(1,2,3,6,4,7,9,15);
foreach ($list_number as $value)
    {
        ktrachiahet3($value);
    }
?>