<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .avata{
            height:400px;
            width: 400px;border-radius:50%;
            border:1px solid #111;
            object-fit: cover;
        }
    </style>
</head>
<body>
<?php 
    if (isset($_POST['uploadClick'])){
        if (isset($_FILES['avata'])){
            if ($_FILES['avata']['error'] == 0){
                move_uploaded_file($_FILES['avata']['tmp_name'],'./image/'.$_FILES['avata']['name']);
                $img_url = './image/'.$_FILES['avata']['name'];
            } else {
                echo 'Lỗi file';
            }
        }
        else {
            echo 'Chưa chọn file';
        }
    }

?>
    <form action="" enctype="multipart/form-data" method="post">
    <img class ="avata" src="<?php 
        echo isset($img_url)? $img_url : 'https://gpa.edu.vn/wp-content/uploads/2018/08/avata.jpg'; ?> " alt="">
        <input type="file" name="avata">
        <label for ></label>
        <input type="submit" name='uploadClick' value="Upload">
        
    </form>
</body>
</html>