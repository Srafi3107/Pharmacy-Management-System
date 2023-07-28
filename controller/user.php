<?php
//forget password function
require_once('../model/user.php');
if(isset($_POST['forgetPass'])){
    $username = $_POST['username'];
    $pass= $_POST['password'];
    $cpass= $_POST['cpassword'];
    if($username == "" || $pass == "" || $cpass == ""){
        echo "Please fill all information";
    }else{
        if($pass == $cpass){
            $check = getUserByUsername($username);
            if($check==true){
                $result = forgetPassword($username,$pass);
                if($result==true){
                    echo "Password changed";
                    header('refresh:3;URL= ../view/login.php');
                }else{
                    echo "Fail to register user";
                }
            }else{
                echo "Username not found";
            }
        }else{
            echo "password and confirm password does not match";
        }
        
        
    }
}
?>