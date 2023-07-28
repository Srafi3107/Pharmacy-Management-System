<?php
    include('header.php');
?>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="../controller/sales.php" method= "post">

        <div class="row">
   

          <div class="col-50">
            <h3>Payment</h3>
            <label for="cname">Amount to pay</label>
            <input type="text" id="price" name="price" placeholder="Enter Amount"></br></br></br></br>
            
            <h3>Card Details</h3>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Enter card number">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Enter Expire Month">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="***">
              </div>
            </div>
          </div>

        </div>
        <input type="submit" name="pay" value="Continue to checkout" class="btn btn-success">
      </form>
    </div>
  </div>

  
</div>