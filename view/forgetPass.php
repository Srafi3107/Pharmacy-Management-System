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
<h2>Forget Password Form</h2>

    <div class="form-container">
    <div class="form" action="/action_page.php" method="post">
    <div class="imgcontainer">
        <h1>Change Your password</h1>
    </div>
    <form action="../controller/user.php" method="post">

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" name="username" >
            
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" >
            <label for="psw"><b>Confirm Your Password</b></label>
            <input type="password" placeholder="Enter Password" name="cpassword" >
            
            <button class="btn-primary" type="submit" name="forgetPass" id="submit">Change Password</button>
            
        </div>
    </form>
    <div class="container" >
        <a href="index.html" ><button type="button" class="btn-danger">Home</button>
        </a>
    </div>
    
    </div>
    
    </div>
</div>
</body>
</html>
