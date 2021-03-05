<?php
 $age = 21;
 $name = "Nguyễn Văn Hải";
 echo 4 . 5;
 echo "</br>";
 echo 4 + 5;
 echo "</br>";
 echo 4 - 5;
 echo "</br>";
 echo 4 * 5;
 echo "</br>";
 echo 4 / 5;
 echo "</br>";
 echo "Name : " . $name . "</br>Age " . $age;
 echo "</br>hello world</br>" ;
 $list = array("fir" => 1,2,3,"44",12,"adad");
 $array = [3, 2, 9, 4];
 print_r($array);
 echo "</br>";
 var_dump($list);
 echo "Ex Array: " . $list[4];
 ?>
 <?php 
 echo "<h1>Toán tử so sánh</h1>";
 $n1=8;
 if( $n1 === 0){
     echo "So 0";
 } else{ if ($n1%2 == 0)
            echo "La so chan";
        else 
        echo "la so le";
    }
    echo '</br>';
 echo ($n1 % 2 == 0 ? "so: ". $n1 . " la so chan" : "so: ". $n1 . " la so le");

 echo '<h1></br>SWITCH CASE</br></h1>';
 $number = 50;
 switch($number){
     case '1': echo "Số 1";break;
     case '2': echo "Số 2";break;
     case '3': echo "Số 3";break;
     case '4': echo "Số 4";break;
     case 5: echo "Số 5";break;
     case '6': echo "Số 6";break;
     case '7': echo "Số 7";break;
     case '8': echo "Số 8";break;
     case '9': echo "Số 9";break;
     default : echo "We could not find anything";

 }
 echo '<h1></br>While, Do While</br></h1>';
 $a = 1;
 $b=1;
 while( $a < 11){
    if( $a % 2 != 0 )
        echo " ".$a;
    $a++;

 };
echo "</br>";
 do {
     if ($a % 2 != 0 && $a != 11)
        echo " ". $a;
     $a--;
 } while($a >  0);
 echo '<h1></br>For</br></h1>';
 for ($number = 0 ; $number < 11 ; $number++){
     if($number % 2 != 0)
        echo " ".$number;
 };
 echo '</br>';
 for ($number = 0 ; $number < 10 ; $number++){
    for($number2 = 9 ; $number2 >= $number ;$number2--)
        {
            echo " ".$number2;
        }
        echo "</br>";
    
}
$list_student = array('H1' => 'Nguyen Van Hai','H2' => 'Nguyen Thanh Duy','H3' => 'Hoang Minh','H4' => 'Bui Duy Thao','H5' => 'Dinh Cuong');

echo '</br>';
foreach( $list_student as $key => $value)
    {
        echo "</br>" . $value . "</br>";
    };
echo '</br>';
foreach( $list_student as $value)
    {
        echo "</br>" . $value . "</br>";
    };
    echo '</br>';
    


 ?>
 