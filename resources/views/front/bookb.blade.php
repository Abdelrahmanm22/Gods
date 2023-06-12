<!DOCTYPE html>
<html lang="en">

<head>
    <title>Egyptian Gods | Reservation</title>
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/headerrblack.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Logo.png">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/bookupb.css')}}">
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UV-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body class="o">
    <nav class="navbar navbar-expand-sm  sticky-top" style="width: 100%;">

        <div class="container-fluid">
            <a class="navbar-brand" href="indexblack.php " style="color: #cf7500" id="back">Egyptian Gods</a>
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
                                <li><a class="dropdown-item" href="dark1.php">Sekhmet</a></li>
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
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">News</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="signin.php" role="button" data-bs-toggle="dropdown">Sign In</a>
                        <ul class="dropdown-menu menu22">
                            <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
                            <li><a class="dropdown-item" href="profile.php">Profile Edit</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="stroke"><a href="book.php"><i class="fa-solid fa-circle-half-stroke"></i></a></div>
    </nav>



    <div>
        <div class="container">
            <h1 class="welstatment">Book Up!</h1>
            <div class="connexion">
                <div class="contact-form">
                    <form>
                        <label for="name" id="name">User Name</label>
                        <input placeholder="User Name" type="text" id="name" name="name" style="color: white;">
                        <label for="country" id="country">Your Country</label>
                        <input placeholder="Your Country" type="text" id="country" name="country">
                        <label for="email">E-mail</label>
                        <input placeholder="E-mail" type="text" id="email" name="email">
                        <label for="phone">Phone</label>
                        <input placeholder="Phone" type="text" id="phone" name="phone">
                        <label for="address">Address</label>
                        <input placeholder="Address" type="text" id="address" name="address">
                        <label for="Date of visit">Date of visit</label>
                        <input type="datetime-local" id="Date of visit" name="Date of visit">
                        <label for="number">Number of members</label>
                        <input type="number" id="number" name="number" placeholder="member">
                        <label for="number">Number of children</label>
                        <input type="number" id="number" name="number" placeholder="children">
                        <label for="god">Choose god you want visit</label>
                        <select id="god" name="god">
                            <option value="">Choose God</option>
                            <option value="oser">Osiris</option>
                            <option value="isis">Isis</option>
                            <option value="maat">Tefnut</option>
                            <option value="ra">Ra</option>
                            <option value="amun">Amun</option>
                            <option value="hetp">Sekhmet</option>
                            <option value="atun">Atum</option>
                            <option value="oser">Set</option>
                            <option value="oser">Nut</option>
                            <option value="oser">Geb</option>
                            <option value="oser">Anubis</option>
                        </select>
                        <label for="tourism">Tourism</label>
                        <select id="tourism" name="tourism">
                            <option value="">Choose Tourism</option>
                            <option value="s">Smiraj Tourism</option>
                            <option value="us">Sanabel Al Moataz Tourism</option>
                            <option value="aust">Sensir Travel</option>
                            <option value="cana">Gest Egypt Tours</option>
                            <option value="usa">Galaxia Tours</option>
                        </select>
                        <label for="veh">Choose type of vehicle</label>
                        <select id="veh" name="veh">
                            <div class="h">
                                <option value="">Choose Vehicle</option>
                                <option value="bus">Bus</option>
                                <option value="plane">Plane</option>
                                <option value="shep">Ship</option>
                                <option value="train">Train</option>
                            </div>
                        </select>
                        <label for="text"> Note</label>
                        <textarea name="message" rows="4" cols="30">Your Note...
            </textarea>
                        <label>Total Cost = 0 Eg</label>
                        <input class="submit" value="Book Up" type="submit">
                    </form>
                </div>

            </div>
        </div>
    </div>
    <br>
    <br>
    <?php
    include "footerblack.php"
    ?>
</body>

</html>
