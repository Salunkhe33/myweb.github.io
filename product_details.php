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


    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="./images/logo.png" alt="" width="125px">
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





    <!-- single product details -->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="./images/gallery-1.jpg" alt="" width="100%" id="ProductImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="./images/gallery-1.jpg" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="./images/gallery-2.jpg" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="./images/gallery-3.jpg" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="./images/gallery-4.jpg" alt="" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2 ">
                <form action="cart.php" method="POST">
                <p>Home / T-Shirt</p>
                <h1>Red Printed T-Shirt By HRX</h1>
                <h4>$50.00</h4>
                <select>
                    <option>Select Size</option>
                    <option>XL</option>
                    <option>XXL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <input type="number" name="quantity" value="1">
              
              <button type="submit" class="btn" name="Add_to_cart">Add to cart</button>
              <input type="hidden" name="item_name" value="Red Printed T-shirt">
              <input type="hidden" name="price1" value="$50.00">

               
                <h3>Product Details <i class="fa-solid fa-indent"></i></h3><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt voluptatum temporibus obcaecati quam
                    sit consequuntur atque magnam, repellat excepturi vero.</p>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <img src="images\product-4.jpg" alt="" width="100%" id="ProductImg">
                
            </div>
            <div class="col-2 ">
                <form action="cart.php" method="POST">
                <p>Home / T-Shirt</p>
                <h1>Blue Printed T-Shirt By HRX</h1>
                <h4>$55.00</h4>
                <select>
                    <option>Select Size</option>
                    <option>XL</option>
                    <option>XXL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <input type="number" value="1">
              
              <button type="submit" class="btn" name="Add_to_cart">Add to cart</button>
              <input type="hidden" name="item_name" value="blue Printed T-shirt">
              <input type="hidden" name="price2" value="$55.00">

               
                <h3>Product Details <i class="fa-solid fa-indent"></i></h3><br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt voluptatum temporibus obcaecati quam
                    sit consequuntur atque magnam, repellat excepturi vero.</p>
                </form>
            </div>
        </div>
    </div>
<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
    </div>
</div>
    <div class="small-container">
       
        <div class="row">
            <div class="col-4">
                <img src="./images/product-5.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-6.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-7.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="./images/product-8.jpg" alt="">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>

    </div>


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

    <!-- js for small images -->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img")

        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src = SmallImg[3].src;
        }
    </script>
</body>

</html>