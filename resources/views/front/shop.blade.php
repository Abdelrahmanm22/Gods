<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/headerrblack.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Egyptian Gods |Online Shop</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/normalize.css')}}">
    <meta name="description" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{URL::asset('front/assets/css/shop.css')}}" />
</head>

<body>
    <!-- nav start -->

    <nav class="navbar navbar-expand-sm  sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('myHome')}}" style="color: #cf7500" id="back">Egyptian Gods</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('myHome')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('gods')}}">Historical</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
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
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('image')}}">Images</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('video')}}">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('book')}}">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('shop')}}">Online Shop</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="contact.php">News</a>
                    </li> -->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="signinblack.css" role="button" data-bs-toggle="dropdown">Sign In</a>
                        <ul class="dropdown-menu menu22">
                            <li><a class="dropdown-item" href="{{route('signUp')}}">Sign Up</a></li>
                            <li><a class="dropdown-item" href="{{route('profile')}}">Profile Edit</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>

        <div class="stroke"><a href="shop - light.php"><i class="fa-solid fa-circle-half-stroke"></i></a></div>

    </nav>
    <br>
    <br>
    <br>

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
                    <li class="accessories" data-cont=".onlineAccesories"> Accessories</li>
                    <li class="mags" data-cont=".onlineMags">Mugs</li>
                </ul>
            </div>

            <div class="tabImg">
                <div class="onlineHome">
                    @foreach($products as $p)
                    <div class="Card">
                        <img src="{{URL::asset('image/Product').'/'.$p->image}}" alt="T-shirt" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>{{$p->name}}</h1>
                                <h2>{{$p->price}} LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="Card">
                        <img src="{{URL::asset('front/assets/img/product/mask3.jpeg')}}" alt="Mask" />
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
                        <img src="{{URL::asset('front/assets/img/product/bok1.jpeg')}}" alt="Book" />
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
                        <img src="{{URL::asset('front/assets/img/product/case1.jpeg')}}" alt="Case" />
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
                        <img src="{{URL::asset('front/assets/img/product/te14.webp')}}" alt="sweatShirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/bag1.jpeg')}}" alt="Bag" />
                        <div class="cardInfo">
                            <div class="cardHeader">
                                <h1>Backpack</h1>
                                <h2>190.20 LE</h2>
                            </div>
                            <div class="cardFooter">
                                <button class="eg-btn">Add To Card</button>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="onlineUnisex">
                    <div class="Card">
                        <img src="{{URL::asset('front/assets/img/product/nte6.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/nte1.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/wte1.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/nte12.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/te12.webp')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/NTE3.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/wte2.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/nte11.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/te16.webp')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/NTE4.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/nte5.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/nte10.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/nte9.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/nte7.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/nte8.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/kid1.jpg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/kid14.jpg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/kid15.jpg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/kid16.jpg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/kid17.jpg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/kid2.jpg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/kid3.jpg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/kid4.png')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/kid5.png')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/bag1.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/bag5.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/bag8.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/bag18.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/bag25.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/bagg3.jpg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/book3.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/bagg5.jpg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/sleev1.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/sleev4.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/case2.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/case3.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/case4.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/case7.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/mask4.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/mask2.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/mag3.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/mag2.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/mag4.jpeg')}}" alt="T-shirt" />
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
                        <img src="{{URL::asset('front/assets/img/product/mag8.jpeg')}}" alt="T-shirt" />
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
    @include('front.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>
    <script src="{{URL::asset('front/assets/js/shop.js')}}"></script>
</body>

</html>
