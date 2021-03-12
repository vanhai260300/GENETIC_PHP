<?php 
    function check_username($username){
        if (($username) != '' ){
            if (strlen($username) > 4)
            {
                $error1 = "ok";
            }
            else{
                $error1 = "Nhap lơn hon 4 ky tu";
            }
        }
        else{
            $error1 = "Vui long nhập tên dang nhap" ;
        }
        return $error1;
    };
    
    function check_password($password){
        if (($password) != ''){
            if (strlen($password) > 6) {
                $error2 = "ok";
            } else { 
                $error2 = "Nhap mat khau hơn 8 ký tự";
            }
        }
        else{
            $error2 = "Vui long nhập mat khau" ;
        }
        return $error2;
    };


    if(isset($_POST['login'])){
        $username1 = $_POST['username'];
        $password1 = $_POST['password'];
        $er1 = check_username($username1);
        $er2 = check_password($password1);
        
    }

    // function xxx($xxx){
    //     if (($username) != '' ){
    //         if (strlen($username) > 4)
    //         {

    //         }
    //         else{
    //             $error1 = "Nhap lơn hon 4 ky tu";
    //         }
    //         if (($password) != ''){
    //             if (strlen($password) > 6) {

    //             } else { 
    //                 $error2 = "Nhap mat khau hơn 8 ký tự";
    //             }
    //         }
    //         else{
    //             $error2 = "Vui long nhập mat khau" ;
    //         }
    //     }
    //     else{
    //         $error1 = "Vui long nhập tên dang nhap" ;
    //     }
    // }
    
?>