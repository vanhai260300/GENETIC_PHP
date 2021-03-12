<?php 
function giaiptb2($a,$b,$c){
    $delta = $b * $b - 4 * $a * $c;
    if ($a == 0)
    {
        if ($b == 0 && $c == 0){
            $kq = "Phuong trinh vo so nghiem";
        } else  if ($b == 0 && $c != 0){
            $kq = "Phuong trinh vo nghiem";
        } else 
        $kq =  -($c) / $b;
    } 
    else 
    {
        if($delta == 0){
            $kq =  (-$b / (2*$a)) ; 
        } else if($delta <0 ){
            $kq = 'Phuong Trinh Vo nghiem';
        }else {
            $delt = sqrt($delta);
            $kq =  (-$b + $delt) / (2*$a);
        }

    }
    return $kq;
};

    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){

        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $kq = giaiptb2($a,$b,$c);
        
    }

?>