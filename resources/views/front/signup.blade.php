<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Egyptian Gods | Sign Up</title>
    <link rel="icon" type="image/x-icon" href="Logo.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/signup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/headerr.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body >
<nav class="navbar navbar-expand-sm  sticky-top" style="width: 100%;">

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
          <a class="nav-link dropdown-toggle" href="his1.php" role="button" data-bs-toggle="dropdown">Historical</a>
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
          <a class="nav-link" href="image.php">Images</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="video.php">Video</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="book.php">Reservation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('shop')}}">Online Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">News</a>
        </li>

        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="signin.php" role="button" data-bs-toggle="dropdown">Sign In</a>
          <ul class="dropdown-menu menu22">
            <li><a class="dropdown-item" href="{{route('signUp')}}">Sign Up</a></li>
            <li><a class="dropdown-item" href="{{route('profile')}}">Profile Edit</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
<div class="stroke" ><a href="signupblack.php"><i class="fa-solid fa-circle-half-stroke"></i></a></div>
</nav>


    <div class="containsignup">
        <div class="containtextt">
            <p class="textt1">Welcome back</p>
            <p class="textt2">To keep connected with us please login with your personal information</p>
            <button><a href="{{route('signIn')}}" style="text-decoration: none;color:white;font-weight:bold">Sign In</a></button>
        </div>
        <div class="signup">
            <p class="txtsignup1"> Create an account</p>
            <p class="txtsignup2">Connect with us by creating an account</p>
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('success')}}
                </div>
            @endif
            <form action="{{route('postSignUp')}}" method="post">
              @csrf
                <label>User Name</label>
                <br>
                <input type="text" name="username" id="email">
                <br>
                @error('username')
                  <small class="form-txt text-danger">{{$message}}</small>
                @enderror
                <br>
                <label>Email</label>
                <br>
                <input type="email" name="email" id="email">
                <br>
                @error('email')
                       <small class="form-txt text-danger">{{$message}}</small>
                @enderror
                <br>
                <label>Password</label>
                <br>
                <input type="password" name="password" id="password">
                <br>
                @error('password')
                    <small class="form-txt text-danger">{{$message}}</small>
                @enderror
                <br>
                <label>Confirm password</label>
                <br>
                <input type="password" name="password_confirmation" id="Cpassword">
                <br>
                @error('password_confirmation')
                    <small class="form-txt text-danger">{{$message}}</small>
                @enderror
                <br>
                <p class="account">By continuing you agree to our <a href="#">Terms of Service and Privacy Policy</a></p>
                <input type="submit" id="submit" value="Sign Up">
            </form>
            <p class="account">You Are Admin ? <a href="{{route('login')}}"> Sign In as Admin </a> </p>
        </div>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
@include('front.footer')
</body>
</html>
