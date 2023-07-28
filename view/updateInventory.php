<?php
    include('header.php');
    require_once('../model/inventoryDB.php');
    $id=$_GET['id'];
    $row=getStockById($id);

    
?>




    <div class="form-container">
    <div class= "form">
        <form action="../controller/inventory.php" method="post">
    
    <div class="container">
    <h2>Update <?php echo $row['name'] ?></h2>
    <input type="hidden" name="id" value= <?php echo $id?>>
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" value="<?php echo $row['name'] ?>" name="name" >

        <label for="add"><b>Quantity</b></b></label>
        <input type="text" placeholder="Enter Address" name="quantity"  value="<?php echo $row['stock'] ?>" >

        <label for="add"><b>Price per unit</b></b></label>
        <input type="text" placeholder="Enter Join Date" name="price"  value="<?php echo $row['price'] ?>">
        
        
        <button  type="submit" value="update" name="update" class="btn-warning">Update</button>
    </div>
    </form>
</div>
 
</div>
</body>
</html>