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
<h2>Registration</h2>

    <div class="form-container">
    <div class= "form">
    <div class="imgcontainer">
        <img src="../assets/img_avatar2.png" alt="Avatar" class="avatar">
    </div>
    <form action="../controller/registerCheck.php" method="post">

        <div class="container">
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" >
            
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" >
            
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" >
            
            <label for="cpass"><b>Confirm Password</b></label>
            <input type="password" placeholder="Enter Confirm Password" name="cpass" >
            
            <label for="address"><b>Address</b></b></label>
            <input type="text" placeholder="Enter Address" name="address" >
            
            <label for="phone"><b>Phone</b></b></label>
            <input type="text" placeholder="Enter Phone" name="phone" >
            
            <button type="submit" name='submit' class="btn-success">Register</button>
            
        </div>
    </form>
    <h4 id="response"> </h4>
    <div class="container" >
        <a href="login.php" ><button type="button" class="btn-danger">Login</button>
        </a>
        <a href="index.html" ><button type="button" class="btn-primary">Home</button>
        </a>
    </div>

</div>
    </div>
</div>
</body>
</html>
