<?php
    include('header.php');
?>


    <div class="form-container">
    <div class= "form">
    <div>
        <h2>Cashiar Dashboard</h2>
    </div>

    <div class="container">
        <a href="./managePharmacist.php"><button class="btn-primary">Manage Pharmacist</button></a>
        <a href="./inventory.php"><button class="btn-primary">Medicine Inventory</button></a>
        <a href="./payment.php"><button class="btn-primary">Payment Checkout</button></a>
        <!-- <button class="btn-primary">Stock List </button> -->
        <a href="./report.php"><button class="btn-primary"> Profile Report</button></a>
        
    </div>
    <div class="left-container">
        <button class="btn-danger"><a href="../controller/logout.php" >Logout</a>
        </button>
    </div>

    <div class="container">
    </div>
</div>
    </div>
</div>
</body>
</html>