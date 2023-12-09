
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
                    <img src="./images/logo.png" alt="" width="200px">
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
<!-- Acount -->
<div class="account-page">
    <div class="container">
        <div class="row">
<div class="col-2">
    <img src="./images/image1.png" alt="" width="100%">
</div>
<div class="col-2">
    <div class="form-container">
        <div class="form-btn">
            <span onclick="login()">Login</span>
            <span onclick="register()">Register</span>
            <hr id="indicator">
        </div>
        <form action="" id="logform">
            <input type="text " placeholder="Username"required >
            <input type="Password " placeholder="Password" required>
            <button type="submit" class="btn">Log In</button>
            <a href="">Forget Password</a>
        </form>
        <form action="account.php" method="POST" id="regform">
            <input type="text " placeholder="Usename" name="username"required>
            <input type="email " placeholder="Email" name="email" required>
            <input type="Password " placeholder="Password" name="password"required>
            <button type="submit" class="btn">Register</button>
          
        </form>
    </div>
    <?php 
if($_SERVER['REQUEST_METHOD']== 'POST'){


    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','registration');
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into form(username,email,password)values(?,?,?)");
        $stmt->bind_param("ssi",$username,$email,$password);
        $stmt->execute();
        echo '<script>alert(" your data is stored successfully")</script>';
        $stmt->close();
        $conn->close();

    }
}

    

    ?>
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
    <!-- js for accounts btn -->
    <script>
        var logform = document.getElementById("logform")
        var regform = document.getElementById("regform")
        var indicator = document.getElementById("indicator")

        function register(){
            regform.style.transform = "translateX(0px)"
            logform.style.transform = "translateX(0px)"
            indicator.style.transform = "translateX(100px)"
        }
        function login(){
            regform.style.transform = "translateX(300px)"
            logform.style.transform = "translateX(300px)"
            indicator.style.transform = "translateX(0px)"

        }



    </script>
    <!-- js for form validation -->
 
    </script>
</body>

</html>