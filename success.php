<?php include 'inc/header.php';?>

<?php 
  $login = Session::get("cmrlogin");
  if ($login == false) {
    header("Location: login.php");
  }
?>

<style>
  .psuccess{
    width: 500px;
    min-height: 200px;
    text-align: center;
    border: 1px solid #ddd;
    margin: 0 auto;padding: 50px;
    }
  .psuccess h2{
        border-bottom: 1px solid #ddd;
       margin-bottom: 50px;
       padding-bottom: 10px;
     }

    .psuccess p{
      font: 17px tahoma plane;
      text-align: left;
    } 
  .psuccess a{
      background: #ffb7b7 none repeat scroll 0 0;
      color: #4c4c4c;
      font-family: tahoma;
      font-size: 18px;
      letter-spacing: 1px;
      padding: 2px;
   }
  .back{}
  .back a{
    width: 180px;
     text-align: center;
     display: block;
    margin: 5px auto 0;
    padding: 7px;
    background: #555;
    border: 1px solid #333;
    border-radius: 3px;
    color: #ddd;
  }
</style>
 <div class="main">
    <div class="content">
      <div class="section group">
            <div class="psuccess">
                <h2>success</h2>
                <?php
                  $cmrId = Session::get("cmrid");
                  $amount = $cart->paybleAmount($cmrId);
                  if ($amount) {
                    $sum=0;
                    while ($result= $amount->fetch_assoc()) {
                     $price = $result['price'];
                     $sum = $sum+$price;
                   
                    }
                  }
                ?>
                <p>Your Total Payable Amount (including vat) : $
                  <?php
                    $vat = $sum * 0.1;
                    $total = $vat + $sum;
                    echo $total;
                  ?>
                </p>
                <p>Thanks for parchase. recieve your order successfully. we will contact ASAP with delevery details. Here is your order details...<a href="orderdetails.php">VIsit here</a></p>
            </div>
            <div class="back">
                <a href="cart.php">Previous</a>
            </div>
      </div>  
       <div class="clear"></div>
    </div>
 </div>
 <?php include 'inc/footer.php';?>