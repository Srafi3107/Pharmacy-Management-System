
<?php
    session_start();
    require_once('../model/user.php');
    

    if(isset($_POST['submit'])){
        

        $username =$_POST['username'];
        $password = $_POST['password'];

         if($username == "" || $password == ""){
            echo "Please enter username and password";
            
        }else{
            //$user = $_SESSION['c_user'];
                
                $status = validateUser($username, $password);

                if($status!=false){
                    setcookie('flag', true, time()+3600, '/');
                    $_SESSION['user']=$status;
                    // return true;
                    echo "success";
                    
                }
                else{
                    echo "failed";
                    // return false;
                } 
            
            
        }

    }
?>