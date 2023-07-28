<?php
    include('header.php');
    require_once('../model/inventoryDB.php');
    $result=getAllStock();

?>

<div class="form-container">
<div class= "form">
<div class="sub-container">
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Quantity</th>
    <th>Price per Unit</th>
    <th>Total</th>
    <th>Action</th>
  </tr>
  <form method="get">
    <?php
    $id=1;
        while($row=mysqli_fetch_assoc($result)){
            $total=$row['stock']*$row['price'];
            echo "<tr>";
            echo "<td>".$id."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['stock']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "<td>".$total."</td>";
            echo '<td><button class="btn-warning"><a  href="updateInventory.php?id='.$row['id'].'">Update</a></button></td>';
            echo "</tr>";
            $id++;
        }
    ?>
    </form>
</table>
<div class="container">
<button class="btn-primary"><a href="addInventory.php">Add New</a></button>
<button class="btn-success"><a href="dashboard.php">Back</a></button>
</div>
</div>
</div>
</div>
</body>
</html>

