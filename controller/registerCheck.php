
<?php
    session_start();
    require_once('../model/user.php');
    

    if(isset($_POST['submit'])){
        
        $name=$_POST['name'];
        $username =$_POST['username'];
        $password = $_POST['password'];
        $c_password = $_POST['cpass'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];


         if($username == "" || $password == "" || $name == "" || $address == "" || $phone == ""){
            echo "Please fill all information";
            
        }else{
            if($password == $c_password){
                $result = createUser($name,$username, $password, $address, $phone);
                if($result==true){
                    header('Location: ../view/login.php');
                    
                }else{
                    echo "Fail to register user";
                }
            }else{
                echo "password not match";
            }
            
            
        }

    }
?>