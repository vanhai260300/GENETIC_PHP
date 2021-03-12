<?php 
if ($_GET['value1'] != ''|| $_GET['value2'] != '')

{
    if (is_numeric($_GET['value1']) && is_numeric($_GET['value2'])){
        $value1 = $_GET['value1'];
        $value2 = $_GET['value2'];
        if (isset($_GET['cong'])) $kq = $_GET['value1'] + $_GET['value2'];
        if (isset($_GET['tru'])) $kq = $_GET['value1'] - $_GET['value2'];
        if (isset($_GET['nhan'])) $kq = $_GET['value1'] * $_GET['value2'];
        if ($_GET['value2'] != 0)
    {
        if (isset($_GET['chia'])) $kq = $_GET['value1'] / $_GET['value2'];
    }
    else {
        $kq = "Không thể chia cho 0";
    }
    } else {
        $kq = "Phải nhập số";
    }
    
    
} else 
    $kq = 'Chua Nhap gia tri';    
?>
<form action="" method="get">
    <input type="text" name="value1" value='<?php if(isset($value1)) echo $value1?>'>
    <input type="text" name="value2" value='<?php if(isset($value2)) echo $value2?>'>
    <input type="submit" value="+" name="cong">
    <input type="submit" value="-" name="tru">
    <input type="submit" value="*" name="nhan">
    <input type="submit" value="/" name="chia">
    <label>Result</label>
    <label>
            <?php if(isset($_GET['cong']) || isset($_GET['tru']) || isset($_GET['nhan']) || isset($_GET['chia']))
                echo $kq;
            ?>
    </label>
</form>