<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Egyptian Gods | Sign In</title>
    <link rel="icon" type="image/x-icon" href="Logo.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/signin.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/headerr.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

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

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('signIn')}}" role="button" data-bs-toggle="dropdown">Sign In</a>
                        <ul class="dropdown-menu menu22">
                            <li><a class="dropdown-item" href="{{route('signUp')}}">Sign Up</a></li>
                            <li><a class="dropdown-item" href="{{route('profile')}}">Profile Edit</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="stroke"><a href="signinblack.php"><i class="fa-solid fa-circle-half-stroke"></i></a></div>
    </nav>

    <!-- end of navigation bar-->


    <div class="containsignin">
        <div class="signin">
            <p class="txtsignin1">Welcome back</p>
            <p class="txtsignin2">To keep connected with us please login with your personal information</p>
            @if(Session::has('error'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('error')}}
                </div>
            @endif
            <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif -->
            <form action="{{route('postSignIn')}}" method="post">
                @csrf
                <label>Email</label>
                <br>
                <input type="email" name="email" id="email">
                <br>
                <label>Password</label>
                <br>
                <input type="password" name="password" id="password">
                <br>
                <!-- <input type="checkbox" id="remember" name="remember" value="remember">
                <label for="remember" id="remember1">Remember me</label><span class="forgot"><a href="#">Forgot password ?</a></span> -->
                <input type="submit" id="submit" value="Sign In">
            </form>
            <p class="account">Don't have an account ? <a href="{{route('signUp')}}" style="text-decoration:none;color:#9BA4B5"> Sign Up </a> </p>
            <p class="account">You are Admin? <a href="{{route('login')}}" style="text-decoration:none;color:#9BA4B5"> Sign in as Admin </a> </p>
        </div>
        <div class="containtextt">
            <p class="txtsignin1"> Create an account</p>
            <p class="txtsignin2">Connect with us by creating an account</p>
            <button><a href="{{route('signUp')}}" style="text-decoration: none;color:white;font-weight:bold">Sign Up</a></button>
        </div>
    </div>


    @include('front.footer')
</body>

</html>
