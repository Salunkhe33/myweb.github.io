<?php session_start(); ?>
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
    <?php ?>
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
    
                        <?php
                        $count = 0;
                         if(isset($_SESSION['cart'])){
                            $count=count($_SESSION['cart']);
                         }
                        ?>
                        <li><a href="cart_page.php">My Cart <?php echo $count ?></a></li>
                    </ul>
                </nav>
                <a href="cart.php"><img src="./images/cart.png" alt="" width="30px"></a>
                <img src="./images/menu.png" alt="" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Give Your Workout <br> A New Style!</h1>
                    <p>
                        Success isn't always about greatness. It's about consistency. Consistant <br> hard work gains
                        success. Greatness will Come .
                    </p>
                    <a href="" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="./images/image1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- features catagories-->
    <div class="catagories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="./images/category-1.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="./images/category-2.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="./images/category-3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>



    <!-- featured Products -->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">


                <a href="produt-details.html"> <img src="./images/product-1.jpg" alt=""></a>
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
                <img src="./images/product-2.jpg" alt="">
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
                <img src="./images/product-3.jpg" alt="">
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
                <img src="./images/product-4.jpg" alt="">
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
        <h2 class="title">Latest Products</h2>
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
        <div class="row">
            <div class="col-4">
                <img src="./images/product-9.jpg" alt="">
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
                <img src="./images/product-10.jpg" alt="">
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
                <img src="./images/product-11.jpg" alt="">
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
                <img src="./images/product-12.jpg" alt="">
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


    <!-- offer -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="./images/exclusive.png" alt="" class="offer-img">
                </div>
                <div class="col-2">
                    <p>
                        Exclusively Available On Redstore
                    </p>
                    <h1>Smart Band 4</h1>
                    <small>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus numquam quam non, ipsum in
                        aliquam reprehenderit eos autem reiciendis unde nihil velit, atque nobis, ullam debitis
                        recusandae illum ab libero.
                    </small>
                    <br>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>


    <!-- textimonial section -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa-solid fa-quote-left"></i>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus in facilis accusamus.
                        Officiis, sint error!
                    </p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <img src="./images/user-1.png" alt="">
                    <h3>Sean Parker</h3>

                </div>
                <div class="col-3">
                    <i class="fa-solid fa-quote-left"></i>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus in facilis accusamus.
                        Officiis, sint error!
                    </p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <img src="./images/user-2.png" alt="">
                    <h3>Mike Smith</h3>

                </div>
                <div class="col-3">
                    <i class="fa-solid fa-quote-left"></i>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus in facilis accusamus.
                        Officiis, sint error!
                    </p>
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <img src="./images/user-3.png" alt="">
                    <h3>Mabel Joe</h3>

                </div>
            </div>
        </div>
    </div>


    <!-- brands -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="./images/logo-godrej.png" alt="">
                </div>
                <div class="col-5">
                    <img src="./images/logo-coca-cola.png" alt="">
                </div>
                <div class="col-5">
                    <img src="./images/logo-oppo.png" alt="">
                </div>
                <div class="col-5">
                    <img src="./images/logo-paypal.png" alt="">
                </div>
                <div class="col-5">
                    <img src="./images/logo-philips.png" alt="">
                </div>

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
    
</body>

</html>