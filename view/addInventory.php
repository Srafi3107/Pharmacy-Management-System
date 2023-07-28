<?php
    include('header.php'); 
?>

<div class="parrent-container">


    <div class="form-container">
    <div class= "form">
        <form action="../controller/inventory.php" method="post">
    
    <div class="container">
     <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name"  name="name" >

        <label for="quantity"><b>Quantity</b></b></label>
        <input type="text" placeholder="Enter Quantity" name="quantity"  >

        <label for="price"><b>price</b></b></label>
        <input type="text" placeholder="Enter price" name="price"  >
  
        <button type="submit" value="add" name="add" class="btn-success">Add</button>
    </div>
    </form>
</div>
    </div>
</div>
</body>
</html>