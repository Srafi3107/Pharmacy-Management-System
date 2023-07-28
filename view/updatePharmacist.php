<?php
    include('header.php');
    require_once('../model/pharmachist.php');
    $id=$_GET['id'];
    $row=getPharmacistById($id);

    
?>

<div class="parrent-container">


    <div class="form-container">
    <div class= "form">
        <form action="../controller/pharmacist.php" method="post">
    
    <div class="container">
    <h2>Update <?php echo $row['name'] ?></h2>
    <input type="hidden" name="id" value= <?php echo $id?>>
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" value="<?php echo $row['name'] ?>" name="name" >

        <label for="add"><b>Address</b></b></label>
        <input type="text" placeholder="Enter Address" name="add"  value="<?php echo $row['address'] ?>" >

        <label for="add"><b>Join Date</b></b></label>
        <input type="text" placeholder="Enter Join Date" name="date"  value="<?php echo $row['join_date'] ?>">
        
        <label for="phone"><b>Phone</b></b></label>
        <input type="text" placeholder="Enter Phone" name="phone"  value="<?php echo $row['phone'] ?>">
  
        <button type="submit" value="update" name="update" class="btn-success">Update</button>
    </div>
    </form>
</div>
    </div>
</div>
</body>
</html>