<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Egyptian Gods | Sign Up</title>
    <link rel="icon" type="image/x-icon" href="Logo.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/signupblack.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/headerrblack.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: rgb(22,22,22);">
    <!-- Navigation bar -->

    <nav class="navbar navbar-expand-sm  sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="color: #cf7500" id="back">Egyptian Gods</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="indexblack.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="dark1.php" role="button" data-bs-toggle="dropdown">Historical</a>
                        <ul class="dropdown-menu menu">
                            <div><img src="images/osiris-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="dark3.php">Osiris Myths</a></li>
                            </div>
                            <div><img src="images/anubis-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="dark1.php">Anubis</a></li>
                            </div>
                            <div><img src="images/horus-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="dark3.php">Horus</a></li>
                            </div>
                            <div><img src="images/montu-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="dark1.php">Montu</a></li>
                            </div>
                            <div><img src="images/ptah-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="dark1.php">Ptah</a></li>
                            </div>
                            <div><img src="images/ra-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="dark2.php">Ra</a></li>
                            </div>
                            <div><img src="images/sekhmet-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="dark1.css">Sekhmet</a></li>
                            </div>
                            <div><img src="images/shu-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="dark2.php">Shu</a></li>
                            </div>
                            <div><img src="images/tefnut-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="dark2.php">Tefnut</a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="imageblack.php">Images</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viddark.php">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bookb.php">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Online Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutusb.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactb.php">Contact Us</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="signinblack.css" role="button" data-bs-toggle="dropdown">Sign In</a>
                        <ul class="dropdown-menu menu22">
                            <li><a class="dropdown-item" href="signupblack.php">Sign Up</a></li>
                            <li><a class="dropdown-item" href="profile.php">Profile Edit</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>

        <div class="stroke"><a href="signup.php"><i class="fa-solid fa-circle-half-stroke"></i></a></div>

    </nav>

    <!-- End of Navigation bar -->

    <div class="containsignup">
        <div class="containtextt">
            <p class="textt1">Welcome back</p>
            <p class="textt2">To keep connected with us please login with your personal information</p>
            <button><a href="signinblack.php" style="text-decoration: none;color:white;font-weight:bold">Sign In</a></button>
        </div>
        <div class="signup">
            <p class="txtsignup1"> Create an account</p>
            <p class="txtsignup2">Connect with us by creating an account</p>
            <form action="#" method="post">
                <label>Email</label>
                <br>
                <input type="email" name="email" id="email">
                <br>
                <label>Password</label>
                <br>
                <input type="password" name="password" id="password">
                <br>
                <label>Confirm password</label>
                <br>
                <input type="password" name="Cpassword" id="Cpassword">
                <br>
                <p class="account">By continuing you agree to our <a href="#">Terms of Service and Privacy Policy</a></p>
                <input type="submit" id="submit" value="Sign Up">
            </form>
            <p class="account">Already have an account ? <a href="signinblack.php"> Sign In </a> </p>
        </div>
    </div>

    <br>
    <br>



    <?php include "footerblack.php"; ?>
</body>

</html>
