<?php
    include('header.php');
    require_once('../model/pharmachist.php');
    $result=getAllPharmacist();

?>

<div class="form-container">
<div class= "form">
<div class="sub-container">
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Join Date</th>
    <th>Action</th>
  </tr>
    <?php
    $id=1;
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$id."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['join_date']."</td>";
            
            ?>
            <td><a  href="updatePharmacist.php?id=<?php echo $row['id']; ?>"><button class="btn-warning">Update</button></a>
            <a href="../controller/delete.php?id=<?php echo $row['id']; ?>"><button class='btn-danger'>Delete</button></a></td>
            <?php
            echo "</tr>";
            $id++;
        }
    ?>
</table>
<div class="container">

<button class="btn-primary"><a href="addPharmacist.php">Add New</a></button>
<button class="btn-success"><a href="dashboard.php">Back</a></button>
</div>
</div>
</div>
</div>
</body>
</html>

