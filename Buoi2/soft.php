<?php 
function hoanVi($a,$b){
    $tg = $a;
    $a = $b;
    $b = $tg;
};
function SelectionSortAscending($mang)
{
    // Đếm tổng số phần tử của mảng
    $sophantu = count($mang);
  
    // Lặp để sắp xếp
    for ($i = 0; $i < $sophantu - 1; $i++)
    {
        // Tìm vị trí phần tử nhỏ nhất
        $min = $i;
        for ($j = $i + 1; $j < $sophantu; $j++){
            if ($mang[$j] < $mang[$min]){
                $min = $j;
            }
        }
  
        // Sau khi có vị trí nhỏ nhất thì hoán vị
        // với vị trí thứ $i
        $temp = $mang[$i];
        $mang[$i] = $mang[$min];
        $mang[$min] = $temp;
    }
  
    // Trả về mảng đã sắp xếp
    return $mang;
}
function sapXep($a){
    
    for ($i = 0; $i < count($a); $i++)
    {
        $min = $i;
        for($j = ($i+1); $j < count($a); $j++)
        {
            if ($a[$j] < $a[$min]){
                $min = $j;
                
            }
            
        }
        $temp = $a[$i];
        $a[$i] = $a[$min];
        $a[$min] = $temp;
        
    }
    return $a;
};
$a = array(5,4,3,8,9,2);
print_r(sapXep($a));
?>