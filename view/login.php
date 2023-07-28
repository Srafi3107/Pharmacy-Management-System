<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../assets/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>
<div class="parrent-container">
<h2>Login Form</h2>

    <div class="form-container">
    <div class="form" action="/action_page.php" method="post">
    <div class="imgcontainer">
        <img src="../assets/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" >

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" id="password" >
            
        <button class="btn-primary" type="submit" name="submit" id="submit" onclick="userValidate()">Login</button>
       
    </div>
    <h4 id="response"></h4>
    <div class="container" >
        <a href="registration.php" ><button type="button" class="btn-danger">Register</button>
        </a>
        <a href="index.html" ><button type="button" class="btn-primary">Home</button>
        </a>
    </div>
    <a style="font-size: 18px;float:right; padding-right: 5%; padding-top:1px; font-weight:1000; 
    font-family: 'Open Sans', sans-serif; color: red; text-decoration: underline;padding-bottom:5px" href="forgetPass.php">Forget Password?</a>
    
    
    </div>
    
    </div>
</div>
<script type="text/javascript" src="../scripts/scripts.js"></script>
</body>
</html>
