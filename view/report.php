<?php
    include('header.php');
    require_once('../model/sales.php');
    $result=getAllSales();
    
?>

<div class="form-container">
<div class= "form">
<div class="sub-container">
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Card Number</th>
    <th>Date</th>
    <th>Payment Status</th>
  </tr>
    <?php
    $id=1;
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$id."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "<td>".$row['card']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['status']."</td>";
           echo "</tr>";
            $id++;
        }
    ?>
</table>
<div class="left-container">
<button class="btn-primary" onclick="window.print();">Print</a>
        
        <button class="btn-success"><a href="./dashboard.php" >Back</a>
        </button>
    </div>
</div>
</div>
</div>
</body>
</html>

