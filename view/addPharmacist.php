<?php
    include('header.php'); 
?>

<div class="parrent-container">


    <div class="form-container">
    <div class= "form">
        <form action="../controller/pharmacist.php" method="post">
    
    <div class="container">
     <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name"  name="name" >

        <label for="address"><b>Address</b></b></label>
        <input type="text" placeholder="Enter Address" name="address"  >

        <label for="date"><b>Join Date</b></b></label>
        <input type="text" placeholder="Enter Join Date" name="date"  >
        
        <label for="phone"><b>Phone</b></b></label>
        <input type="text" placeholder="Enter Phone" name="phone" >
  
        <button type="submit" value="add" name="add" class="btn-success">Add</button>
    </div>
    </form>
</div>
    </div>
</div>
</body>
</html>