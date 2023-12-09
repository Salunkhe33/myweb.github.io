<?php 
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerce webpage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <div class="header">

        <div class="container">
            <div class="navbar">
                <div class="logo">
                <img src=".\images\logo.png" alt="" width="120pxpx">
                </div>
                <nav>
                    <ul id="menuitems">
                    <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="account.php">Account</a></li>
                        <li><a href="cart_page.php">Cart</a></li>

                    </ul>
                </nav>
                <img src="./images/cart.png" alt="" width="30px">
                <img src="./images/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
            </div>
            
        </div>
    </div>
<!-- cart -->
<div class="container">
    <div class="row">
        <div>
            <h1 class="cart-h1" style="padding-top:50px;">MY CART</h1>
        </div>
    </div>
    <hr>
    <div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Seriel No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

    <?php
 

   if(isset($_SESSION['cart']))
   {
    foreach($_SESSION['cart'] as $key => $value)
    {
    $sr=$key+1;
   
        echo"
        <tr>
        <td>$sr</td>
        <td>$value[item_name]</td>
        <td>$value[price]</td>
        <td><input type='number' min='1' max='10' value='1'></td>
       <form action='cart.php'method='POST'>
       <td><button name='remove_item'class='btn'>Remove</button>
       <input type='hidden' name='item_name' value='$value[item_name]'>
       </td>
       </form>
        </tr>
        ";
    }
   }
     ?>
   
  </tbody>
</table>
<hr>
<div class="row" style='padding:40px 0'>
<div>
    <h3>Total Price:</h3>
    <?php echo $value['price'] ?>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
   Cash On Delivery
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    UPI
  </label>
</div>
    <button style='color:white;background:#007BFF;padding:5px 10px'>Make A purchase</button>
</div>
    </div>
</div>
<br><br><br><br>
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android And Ios Mobile Phones</p>
                    <div class="app-logo">
                        <img src="./images/play-store.png" alt="">
                        <img src="./images/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="./images/logo-white.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eum sit nostrum dolor corrupti
                        porro.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupens</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-3">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Facebook</li>
                        <li> Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">copyright &copy; 2023 by purvesh salunkhe
            </p>
        </div>
    </div>



    <!-- JS for togggle menu -->

    <script>
        var menuitems = document.getElementById("menuitems");

        menuitems.style.maxHeight = "0px";

        function menutoggle() {
            if (menuitems.style.maxHeight == "0px") {
                menuitems.style.maxHeight = "200px";
            }
            else {
                menuitems.style.maxHeight = "0px";
            }
        }
    </script>
</body>

</html>