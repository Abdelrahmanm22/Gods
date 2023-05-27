<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Egyptian Gods</title>
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Logo.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/index.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- navigation bar -->
    <div class="imagecontainer" style="background-image: linear-gradient(rgba(0,0,0,0.60),rgba(0,0,0,0.60)),url(images/gallery2.jpg);width:100%;">
        <nav class="navbar navbar-expand-sm  sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php" style="color: #9BA4B5" id="back">Egyptian Gods</a>
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
                            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">Historical</a>
                            <ul class="dropdown-menu menu">
                                <div><img src="images/osiris-bold.png" class="dropimage">
                                    <li><a class="dropdown-item" href="#">Osiris Myths</a></li>
                                </div>
                                <div><img src="images/anubis-bold.png" class="dropimage">
                                    <li><a class="dropdown-item" href="#">Anubis</a></li>
                                </div>
                                <div><img src="images/horus-bold.png" class="dropimage">
                                    <li><a class="dropdown-item" href="#">Horus</a></li>
                                </div>
                                <div><img src="images/montu-bold.png" class="dropimage">
                                    <li><a class="dropdown-item" href="#">Montu</a></li>
                                </div>
                                <div><img src="images/ptah-bold.png" class="dropimage">
                                    <li><a class="dropdown-item" href="#">Ptah</a></li>
                                </div>
                                <div><img src="images/ra-bold.png" class="dropimage">
                                    <li><a class="dropdown-item" href="#">Ra</a></li>
                                </div>
                                <div><img src="images/sekhmet-bold.png" class="dropimage">
                                    <li><a class="dropdown-item" href="#">Sekhmet</a></li>
                                </div>
                                <div><img src="images/shu-bold.png" class="dropimage">
                                    <li><a class="dropdown-item" href="#">Shu</a></li>
                                </div>
                                <div><img src="images/tefnut-bold.png" class="dropimage">
                                    <li><a class="dropdown-item" href="#">Tefnut</a></li>
                                </div>
                            </ul>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="image.php">Images</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="video.php">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bookup.php">Reservation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('shop')}}">Online Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ranac.php">Contact Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="signin.php" role="button" data-bs-toggle="dropdown">Sign In</a>
                            <ul class="dropdown-menu menu22">
                                <li><a class="dropdown-item" href="{{route('signUp')}}">Sign Up</a></li>
                                <li><a class="dropdown-item" href="{{route('profile')}}">Profile Edit</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            <a href="indexblack.php" class="ic" style="text-decoration: none;"><span style='font-size:30px;  margin-right: 150px;margin-top: 30px;'>&#127763;</span></a>

        </nav>

        <div class="content">
            <div class="title">
                Welcome To Our
                <div class="word">
                    <div>Stories</div>
                    <div>Legends</div>
                    <div>World</div>

                </div>
            </div>
            <p>
                Egypt had one of the largest and most complex pantheons of gods of any civilization
                in the ancient world. Over the course of Egyptian history hundreds of gods and goddesses
                were worshipped. The characteristics of individual gods could be hard to pin down.Most had a
                principle association and form.
            </p>
            <button>Explore</button>
            <button>Book Now</button>
        </div>
    </div>
    </div>
    <!-- We offer the best trips -->
    <div class="tripcontainer">
        <div class="triptext">We Offer The Best Trips</div>
        <div class="tripstext2">You can book with us and enjoy trips to many temples and have the inscriptions explained to you in detail</div>

        <div class="tripimage">
            <img src="{{URL::asset('front/assets/img/temple1.jpg')}}" class="temple">
            <div class="trip"><a href="bookup.php" style="text-decoration: none;color:#9BA4B5">VIEW TRIP</a></div>

        </div>
        <div class="tripimage2">
            <img src="{{URL::asset('front/assets/img/templehorus.jpg')}}">
            <div class="trip2"><a href="bookup.php" style="text-decoration: none;color:#9BA4B5">VIEW TRIP</a></div>
        </div>

        <div class="tripimage3">
            <img src="{{URL::asset('front/assets/img/ISIS.jpg')}}">
            <div class="trip3"><a href="bookup.php" style="text-decoration: none;color:#9BA4B5">VIEW TRIP</a></div>
        </div>
    </div>
    <!-- End -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div style="background-image: linear-gradient(rgba(0,0,0,0.60),rgba(0,0,0,0.60)),url(images/Heroooo.png);width:100%" class="backgal">


        <p class="pgallery">Gallery</p>
        <div class="gallery">
            <img src="{{URL::asset('front/assets/img/anubis.jpg')}}" alt="anubis">

        </div>

        <div class="gallery">
            <img src="{{URL::asset('front/assets/img/Horuss.jpg')}}" alt="Horus">
        </div>

        <div class="gallery">
            <img src="{{URL::asset('front/assets/img/isiss.jpg')}}" alt="isis">

        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div>
            <div class="gallery1">
                <img src="{{URL::asset('front/assets/img/Statues-of-Sekhmet.jpg')}}" alt="Sekhmet">

            </div>
            <div class="gallery1">
                <img src="{{URL::asset('front/assets/img/istockphoto-624471686-612x612.jpg')}}" alt="seth">

            </div>
            <div class="gallery1">
                <img src="{{URL::asset('front/assets/img/c9bad9155bd0e8f8771da63389d6230c.jpg')}}" alt="ptah">

            </div>
        </div>


    </div>
    </div>

    <!-- Video -->
    <div class="videoo">
        <div>
            <video loop muted autoplay>
                <source src="{{URL::asset('front/assets/img/video.mp4')}}">
            </video>
        </div>
        <div class="textvideo">
            <p class="text1">Pantheon of Gods and Goddesses</p>
            <p class="text2">
                The gods and goddesses of Ancient Egypt were an integral part of
                the people's everyday lives. It is not surprising then that there were over 2,000
                deities in the Egyptian pantheon. Some of these deities' names are well known:
                Isis, Osiris, Horus, Amun, Ra, Hathor, Bastet, Thoth, Anubis, and Ptah
                while ma+ny others less so. The more famous gods became state deities
                while others were associated with a specific region or, in some cases, a
                ritual or role. The goddess Qebhet, for example, is a little known deity
                who offered cool water to the souls of the dead as they awaited judgment
                in the afterlife, and Seshat was the goddess of written words and specific
                measurements overshadowed by Thoth, the better known god of writing and patron of scribes.
            </p>
            <button class="read"><a style="text-decoration: none;color:black;padding-right:20px" href="his1.php">Read More</a></button>
        </div>
    </div>
    <!-- End of Video -->

    <!--Sign in-->

    <div style="background-image: linear-gradient(rgba(0,0,0,0.80),rgba(0,0,0,0.80)),url(images/Heroooo.png);width:100%;" class="backsign">

        <p class="sign1">Sign up to our newsletters</p>
        <p class="sign2">Stay connected to us for the latest news, stories, events and visitor information.</p>
        <div class="signbtn"><button>Sign Up</button></div>
    </div>
    <br>
    <br>
    <br>


    <div class="shopcontainer">
        <div class="shoptext">
            <p class="texttt1">Online Shop</p>
            <p class="texttt2">You can buy whatever you want for yourself, your friends and your family to be a beautiful memory for you. You dream, we execute</p>
        </div>
        <div class="pic1">
            <img src="{{URL::asset('front/assets/img/shirt (2).png')}}">
        </div>
        <div class="pic2">
            <img src="{{URL::asset('front/assets/img/shirt.png')}}">
        </div>
        <div class="pic3">
            <img src="{{URL::asset('front/assets/img/hoodie.png')}}">
        </div>
        <div class="shopbtn"><button>Buy now</button></div>
    </div>













    <br>
    <br>
    <br>
    <br>
    <br>




    @include('front.footer')
</body>

</html>
