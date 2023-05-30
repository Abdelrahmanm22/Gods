<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/video.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/headerr.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Logo.png">
    <title>Egyptian Gods | Video Gallery</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm  sticky-top" style="width: 100%;">

        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('myHome')}}" style="color: #9BA4B5" id="back">Egyptian Gods</a>
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
                        <a class="nav-link dropdown-toggle" href="{{route('signIn')}}" role="button" data-bs-toggle="dropdown">Sign In</a>
                        <ul class="dropdown-menu menu22">
                            <li><a class="dropdown-item" href="{{route('signUp')}}">Sign Up</a></li>
                            <li><a class="dropdown-item" href="{{route('profile')}}">Profile Edit</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="stroke"><a href="viddark.php"><i class="fa-solid fa-circle-half-stroke"></i></a></div>
    </nav>
    <!-- END of Navigation bar -->

    <center>
        <h1 class="hh">Few videos for more fun</h1>
    </center>
    <div class="video" style="margin-bottom: -200px;">
        <iframe class="v1" src="https://www.youtube.com/embed/a6L3jwqHrag" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe class="v2" src="https://www.youtube.com/embed/o2XvrhprPwk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe class="v3" src="https://www.youtube.com/embed/Uq0vGHyu0DU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe class="v4" src="https://www.youtube.com/embed/hO1tzmi1V5g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe class="v5" src="https://www.youtube.com/embed/PTJBsFVVpWs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe class="v6" src="https://www.youtube.com/embed/sCmP-y2_jNw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    @include('front.footer')

</body>

</html>
