<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Egyptian Gods |Online Shop</title>
    <link rel="icon" type="image/x-icon" href="logo.png" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="icon" type="image/x-icon" href="images/Logo.png" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="headerr.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{URL::asset('front/assets/css/shop - light.css')}}" />
</head>

<body>
    <!-- nav start -->
    <nav class="navbar navbar-expand-sm  sticky-top" style="width: 100%;">

        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="color: #9BA4B5" id="back">Egyptian Gods</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">Historical</a>
                        <ul class="dropdown-menu menu">
                            <div><img src="images/osiris-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="his3.php">Osiris Myths</a></li>
                            </div>
                            <div><img src="images/anubis-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="his1.php">Anubis</a></li>
                            </div>
                            <div><img src="images/horus-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="his3.php">Horus</a></li>
                            </div>
                            <div><img src="images/montu-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="his1.php">Montu</a></li>
                            </div>
                            <div><img src="images/ptah-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="his1.php">Ptah</a></li>
                            </div>
                            <div><img src="images/ra-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="his2.php">Ra</a></li>
                            </div>
                            <div><img src="images/sekhmet-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="his1.php">Sekhmet</a></li>
                            </div>
                            <div><img src="images/shu-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="his2.php">Shu</a></li>
                            </div>
                            <div><img src="images/tefnut-bold.png" class="dropimage">
                                <li><a class="dropdown-item" href="his2.php">Tefnut</a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="image.php">Images</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="video.php">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="book.php">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop - light.php">Online Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">News</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="signin.php" role="button" data-bs-toggle="dropdown">Sign In</a>
                        <ul class="dropdown-menu menu22">
                            <li><a class="dropdown-item" href="signin.php">Sign Up</a></li>
                            <li><a class="dropdown-item" href="profile - light.php">Profile Edit</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="stroke"><a href="shop.php"><i class="fa-solid fa-circle-half-stroke"></i></a></div>
    </nav>


    <!-- start shop code -->
    <div class="welcomeStatments">
        <h1>Nothing in life can make us happier than seeing you in our site.</h1>
        <p>Make yourself comfortabl and choose what you want!</p>
    </div>
    <main>
        <!-- start tabContent -->
        <div class="leftContent">
            <div class="clothingTab">
                <ul class="clothesTab">
                    <li class="activeclothTab" data-cont=".onlineHome">Home</li>
                    <li class="clothes" data-cont=".onlineUnisex">Unisex's Clothing</li>
                    <li class="kids" data-cont=".onlineKids">Kids' Clothing</li>
                    <li class="accessories" data-cont=".onlineAccesories">
                        Accessories
                    </li>
                    <li class="mags" data-cont=".onlineMags">Mugs</li>
                </ul>
            </div>

            <div class="tabImg">
                <div class="onlineHome">
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/te15.webp')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Men shirt</h1>
                                <h2>250.85 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/mask3.jpeg')}}" alt="Mask" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Face Mask</h1>
                                <h2>100 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/bok1.jpeg')}}" alt="Book" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Clutch Bag</h1>
                                <h2>140 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/case1.jpeg')}}" alt="Case" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Phone Cases</h1>
                                <h2>160 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/te14.webp')}}" alt="sweatShirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Unisex T-Shirt</h1>
                                <h2>240.50 LE</h2>
                            </div>

                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/bag1.jpeg')}}" alt="Bag" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Backpack</h1>
                                <h2>190.20 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="onlineUnisex">
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/nte6.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Unisex T-shirt</h1>
                                <h2>180.85 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/nte1.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Unisex Sweatshirt</h1>
                                <h2>190.85 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/wte1.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Woman Sweatshirt</h1>
                                <h2>280.85 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/nte12.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Unisex sweatshirt</h1>
                                <h2>195 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/te12.webp')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Unisex T-shirt</h1>
                                <h2>190 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/NTE3.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Unisex T-shirt</h1>
                                <h2>190.85 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/wte2.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Woman sweatshirt</h1>
                                <h2>280.85 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/nte11.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Unisex Sweatshirt</h1>
                                <h2>270.85 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/te16.webp')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Men shirt</h1>
                                <h2>250.85 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/NTE4.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Unisex sweatshirt</h1>
                                <h2>180.85 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/nte5.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Unisex Jacket</h1>
                                <h2>480.85 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/nte10.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Unisex sweatshirt</h1>
                                <h2>280.85 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/nte9.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Unisex sT-shirt</h1>
                                <h2>180.85 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/nte7.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Unisex T-shirt</h1>
                                <h2>190.80 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/nte8.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Unisex T-shirt</h1>
                                <h2>170.85 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="onlineKids">
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/kid1.jpg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Kids T-shirt</h1>
                                <h2>175.55 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/kid14.jpg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Kids T-shirt</h1>
                                <h2>175.55 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/kid15.jpg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Kids Mask</h1>
                                <h2>150.55 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/kid16.jpg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Baby Bodysuit</h1>
                                <h2>275.55 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/kid17.jpg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Kids T-shirt</h1>
                                <h2>175.55 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/kid2.jpg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Baby Contrast </h1>
                                <h2>175.55 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/kid3.jpg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Baby Contrast</h1>
                                <h2>175.55 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/kid4.png')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Kids T-shirt</h1>
                                <h2>200.55 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/kid5.png')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Baby Bodysuit</h1>
                                <h2>275.55 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="onlineAccesories">
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/bag1.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Backbag</h1>
                                <h2>200.55 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/bag5.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Backbag</h1>
                                <h2>200.55 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/bag8.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Weekender Bag</h1>
                                <h2>300.20 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/bag18.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Tote Bag</h1>
                                <h2>150.55 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/bag25.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Tote Bag</h1>
                                <h2>230.55 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/bagg3.jpg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Backbag</h1>
                                <h2>250.55 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/book3.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>clutch Bag</h1>
                                <h2>170.55 Le</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/bagg5.jpg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Backbag</h1>
                                <h2>254.45 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/sleev1.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Laptop Sleeve</h1>
                                <h2>240.50 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/sleev4.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Laptop Sleeve</h1>
                                <h2>220.50 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/case2.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Phone Case</h1>
                                <h2>150.50 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/case3.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Phone Case</h1>
                                <h2>140.50 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/case4.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Phone Case</h1>
                                <h2>170.50 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/case7.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Phone Case</h1>
                                <h2>150.50 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/mask4.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Mask</h1>
                                <h2>100.50 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/mask2.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Mask</h1>
                                <h2>100.50 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="onlineMags">
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/mag3.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Mug</h1>
                                <h2>130.50 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/mag2.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Mug</h1>
                                <h2>150.50 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/mag4.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Mug</h1>
                                <h2>140.50 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    <div class="Card">
                        <img src="{{asset('front/assets/img/product/mag8.jpeg')}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Mug</h1>
                                <h2>130.50 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- shop code end -->
    <!-- footer start -->
    <?php
    include "footer.php"
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>
    <script src="{{URL::asset('front/assets/js/shop.js')}}"></script>
</body>

</html>
