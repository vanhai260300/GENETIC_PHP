<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.color{
    color: red;
}

</style>
<body>
    <div>
        <h1>Login</h1>
    </div>
    <div>
        <?php include './ex_login.php';?>
        <form method="post">
            <label for="">Username</label>
            <div>
                <input type="text" name="username" value="<?php if(isset($username)) echo $username?>">
                <label class="color" for="" name='error1'>
                <?php if(isset($_POST['login'])) 
                    if (isset($er1))
                        echo $er1;?>
                </label>
            </div>
            <div>
                <input type="password" name="password" value="<?php if (isset($password)) echo $password?>">
                <label for="" class="color" name='error2'><?php if(isset($_POST['login'])) 
                    if (isset($er2))
                        echo $er2 ;?></label>
            </div>
            <input type="submit" name='login'>
        </form>
    </div>
    
</body>
</html>