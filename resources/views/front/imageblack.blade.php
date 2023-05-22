<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Egyptain Gods| Image Gallery</title>
    <link rel="icon" type="imge/x-icons" href="Logo.png">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/headerrblack.css')}}">

    <style>
        .light_mode {
            margin: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: right;
            justify-content: right;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .container {
            width: 100%;
            padding: 50px;


        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(4, auto);
            gap: 30px;
        }

        .gallery img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, green0, 0.5);
            transition: 0.3s ease;
            filter: grayscale(100%);
            width: 400px;
            height: 300px;
            flex: 25%;

        }

        .gallery img:hover {
            transform: scale(1.1);
            filter: grayscale(0);
        }

        .download {
            border: 2px solid #d8860b;
            padding: 12px;
            color: aliceblue;
            background: rgb(255, 113, 47);
            border-radius: 9px;
            transition: all 0.5s;
            font-size: 12px;
            border-radius: auto;


        }

        .download:hover {
            border: 1px solid rgb(255, 158, 47);
            padding: 15px;
            color: black;
            background: #fff;
            border-radius: 5px;
            transition: all 0.5s;
            font-size: 12px;
            border-radius: auto;
        }

        @media all and (max-width:991px) {
            .gallery img {
                width: 75%;
                border-radius: 20px;
                box-shadow: 0 0 10px rgba(0, green0, 0.5);
                transition: 0.3s ease;
                filter: grayscale(100%);
                display: block;
                flex: 50%;
            }
        }



        @media all and (min-width:768px) {
            .gallery img {
                width: 75%;
                border-radius: 20px;
                box-shadow: 0 0 10px rgba(0, green0, 0.5);
                transition: 0.3s ease;
                filter: grayscale(100%);
                display: block;
                flex: 50%;
            }
        }



        label {
            width: 125px;
            height: 50px;
            position: relative;
            display: block;
            background: #ebebeb;
            border-radius: 50px;
            box-shadow: inset 0px 1.25 2.5px 4px rgba(0, 0, 0, 0.4), inset 0px -1.25px 4px rgba(255, 255, 255, 0.4);
            cursor: pointer;
            margin-left: 1200px;
            transition: .3s;
        }

        label:after {
            content: "";
            width: 45px;
            height: 45px;
            position: absolute;
            top: 2.5px;
            left: 2.5px;
            background: linear-gradient(45deg, #ffcc89, #d8860b);
            border-radius: 45px;
            box-shadow: 0px 1.25px 2.5px rgba(0, 0, 0, 0.2);
            transition: .3s;
        }

        input {
            width: 0;
            height: 0;
            visibility: hidden;
        }

        input:checked+label {
            background: #242424;
        }

        input:checked+label:after {
            left: 90px;
            transform: translateX(-25%);
            background: linear-gradient(45deg, #777, #3a3a3a);
        }

        label:active:after {
            width: 65px;
        }

        .background {
            width: 800vw;
            height: 800vh;
            background: #fff;
            z-index: -1;
            position: absolute;
            transition: 0.3s;

        }

        input:checked+label+.background {
            background: black;
        }

        label svg {
            position: absolute;
            width: 45px;
            top: 20px;
            z-index: 25;
        }

        label svg.sun {
            left: 5px;
            fill: #fff;
            transition: 0.3s;
            top: -373px;
        }

        label svg.moon {
            left: 85px;
            fill: #7e7e7e;
            ;
            transition: 0.3s;
            top: -373px;
        }

        input:checked+label svg.sun {
            fill: #7e7e7e;
        }

        input:checked+label svg.moon {
            fill: #fff;
        }
    </style>
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

        <div class="stroke"><a href="image.php"><i class="fa-solid fa-circle-half-stroke"></i></a></div>

    </nav>
    <!-- End of Navigation bar -->
    <div class="light_mode">
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M32,14.002c-9.941,0-18,8.059-18,18s8.059,18,18,18
         s18-8.059,18-18S41.941,14.002,32,14.002z M32,48.002c-8.837,0-16-7.164-16-16s7.163-16,16-16s16,7.164,16,16
         S40.837,48.002,32,48.002z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M63,31H53c-0.553,0-1,0.447-1,1s0.447,1,1,1h10
         c0.553,0,1-0.447,1-1S63.553,31,63,31z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M11.457,36.469l-3.863,1.035
         c-0.534,0.145-0.851,0.693-0.707,1.227c0.143,0.533,0.69,0.85,1.225,0.705l3.863-1.035c0.533-0.143,0.85-0.689,0.707-1.225
         C12.539,36.643,11.99,36.326,11.457,36.469z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M49.32,22c0.277,0.479,0.888,0.643,1.367,0.365l8.66-5
         c0.479-0.275,0.643-0.887,0.365-1.365c-0.275-0.479-0.887-0.643-1.365-0.365l-8.66,5C49.208,20.912,49.045,21.521,49.32,22z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M17.858,46.143c-0.39-0.391-1.023-0.389-1.414,0l-2.828,2.828
         c-0.391,0.391-0.39,1.025,0.001,1.414c0.39,0.391,1.022,0.391,1.413,0l2.828-2.828C18.249,47.168,18.249,46.533,17.858,46.143z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M42,14.68c0.479,0.275,1.09,0.113,1.367-0.367l5-8.66
         C48.644,5.174,48.48,4.562,48,4.287c-0.478-0.277-1.088-0.113-1.365,0.365l-4.999,8.662C41.358,13.793,41.522,14.402,42,14.68z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M26.824,51.318c-0.532-0.143-1.08,0.176-1.225,0.707l-1.035,3.863
         c-0.143,0.535,0.176,1.082,0.709,1.225c0.533,0.145,1.08-0.172,1.223-0.707l1.035-3.863C27.676,52.012,27.359,51.463,26.824,51.318
         z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M32,12c0.554,0,1.001-0.447,1.002-1V1c0-0.553-0.447-1-1.002-1
         c-0.551,0-0.998,0.447-0.999,1l0.001,10C31.002,11.553,31.449,12,32,12z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M38.402,52.025c-0.141-0.533-0.689-0.85-1.225-0.707
         c-0.533,0.143-0.848,0.691-0.707,1.225l1.035,3.863c0.144,0.535,0.693,0.85,1.227,0.707s0.849-0.689,0.705-1.225L38.402,52.025z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M20.637,14.312c0.275,0.479,0.887,0.643,1.363,0.367
         c0.48-0.277,0.645-0.887,0.368-1.367l-5-8.66C17.092,4.174,16.48,4.01,16,4.287c-0.477,0.275-0.641,0.887-0.365,1.365
         L20.637,14.312z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M47.558,46.141c-0.388-0.389-1.022-0.389-1.414,0
         c-0.391,0.391-0.388,1.025,0,1.414l2.828,2.828c0.392,0.393,1.025,0.389,1.415,0c0.391-0.391,0.391-1.021-0.001-1.414
         L47.558,46.141z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M4.654,17.365l8.662,4.998c0.477,0.277,1.088,0.113,1.363-0.363
         c0.277-0.48,0.115-1.09-0.364-1.367l-8.661-5C5.176,15.355,4.564,15.52,4.287,16C4.013,16.477,4.176,17.088,4.654,17.365z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M52.027,38.4l3.863,1.035c0.535,0.145,1.082-0.176,1.225-0.709
         c0.144-0.533-0.172-1.08-0.707-1.223l-3.863-1.035c-0.531-0.145-1.081,0.172-1.225,0.707C51.176,37.709,51.496,38.256,52.027,38.4z
         " />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M12,32c0.001-0.555-0.445-1-0.998-1.002L1,31
         c-0.552,0-1,0.445-1,1c0.001,0.551,0.448,1,1.001,1l10.001-0.002C11.553,32.998,12.001,32.551,12,32z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M52.545,27.529l3.863-1.035c0.535-0.143,0.85-0.693,0.706-1.227
         c-0.142-0.531-0.688-0.848-1.224-0.705l-3.863,1.035c-0.533,0.141-0.85,0.691-0.707,1.225
         C51.461,27.355,52.012,27.67,52.545,27.529z" />
        <circle fill-rule="evenodd" clip-rule="evenodd" fill="#F9EBB2" cx="32" cy="32" r="16" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M14.68,42c-0.275-0.48-0.886-0.645-1.365-0.369l-8.661,5.002
         C4.176,46.91,4.01,47.52,4.287,48c0.277,0.477,0.889,0.641,1.367,0.365l8.66-5.002C14.791,43.088,14.957,42.479,14.68,42z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M46.144,17.855c0.389,0.393,1.022,0.389,1.414,0l2.828-2.828
         c0.392-0.391,0.39-1.023-0.002-1.414c-0.388-0.391-1.021-0.391-1.412,0l-2.828,2.828C45.752,16.83,45.754,17.465,46.144,17.855z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M22,49.32c-0.479-0.277-1.088-0.113-1.365,0.363l-5,8.664
         c-0.275,0.477-0.115,1.088,0.365,1.365c0.479,0.273,1.09,0.109,1.367-0.367l4.998-8.662C22.641,50.207,22.48,49.596,22,49.32z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M37.178,12.68c0.531,0.145,1.078-0.176,1.225-0.707l1.035-3.863
         c0.143-0.535-0.176-1.084-0.709-1.225c-0.531-0.145-1.08,0.172-1.223,0.707l-1.035,3.863C36.324,11.986,36.645,12.535,37.178,12.68
         z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M32,52c-0.553-0.002-0.998,0.445-1,0.998l0.002,10.004
         C31.002,63.551,31.445,64,32,64c0.553,0,1-0.449,1.001-1l-0.003-10.002C32.998,52.447,32.555,52,32,52z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M25.6,11.973c0.139,0.533,0.691,0.85,1.225,0.707
         c0.532-0.141,0.846-0.691,0.707-1.225l-1.035-3.863c-0.145-0.535-0.693-0.852-1.227-0.707c-0.531,0.143-0.85,0.689-0.705,1.225
         L25.6,11.973z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M43.363,49.686C43.088,49.209,42.48,49.043,42,49.32
         c-0.479,0.275-0.641,0.885-0.367,1.365l5.004,8.66c0.275,0.479,0.883,0.645,1.363,0.367c0.479-0.277,0.642-0.889,0.367-1.367
         L43.363,49.686z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M16.443,17.855c0.387,0.395,1.023,0.391,1.414,0
         c0.391-0.387,0.387-1.02,0-1.414l-2.828-2.828c-0.393-0.391-1.025-0.389-1.415,0.002c-0.39,0.389-0.392,1.021,0.001,1.412
         L16.443,17.855z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M59.348,46.633l-8.663-4.998
         c-0.478-0.275-1.087-0.115-1.363,0.367c-0.278,0.477-0.112,1.086,0.364,1.363l8.664,5c0.477,0.275,1.086,0.115,1.363-0.365
         C59.988,47.52,59.824,46.91,59.348,46.633z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M11.974,25.598L8.11,24.562c-0.536-0.143-1.083,0.176-1.225,0.709
         c-0.144,0.531,0.171,1.08,0.707,1.225l3.863,1.033c0.531,0.146,1.081-0.174,1.225-0.707C12.825,26.293,12.505,25.746,11.974,25.598
         z" />
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#394240" d="M32,20.002c-0.553,0-1,0.447-1,1s0.447,1,1,1
         c5.522,0,10,4.477,10,10c0,0.553,0.447,1,1,1s1-0.447,1-1C44,25.375,38.627,20.002,32,20.002z" />
        </g>
        </svg>
        </label>
        <!-- <link rel="stylesheet" href="{{URL::asset('front/assets/css/index.css')}}"> -->
        <div class="container">
            <div class="gallery">
                <a href=" {{URL::asset('front/assets/img/imageNav/ انوبيس.jfif')}} " data-lightbox="my gallery" data-title="Goddess Anubis">
                    <img src="{asset('front/assets/img/imageNav/انوبيس.jfif')}}" alt="" style="margin-left:40px ;">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/montu.jfif')}}" data-lightbox="my gallery" data-title="God Montu">
                    <img src="{{asset('front/assets/img/imageNav/montu.jfif')}}" alt="" style="margin-left: 45px;">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/بتاح.jfif')}}" data-lightbox="my gallery" data-title="Goddess Ptah">
                    <img src="{{asset('front/assets/img/imageNav/بتاح.jfif')}}" alt="" style=" margin-left:40px ;">

                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/so.jfif')}}" data-lightbox="my gallery" data-title="God Sekhmet  ">
                    <img src="{{URL::asset('front/assets/img/imageNav/so.jfif')}}" alt="" style="margin-left: 45px;">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/kj.jpg')}}" data-lightbox="my gallery" data-title=" The goddess  Nefertum ">
                    <img src="{{asset('front/assets/img/imageNav/kj.jpg')}}" alt="" style="margin-left:45px ;">

                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/ اوزرييس.jfif')}}" data-lightbox="my gallery" data-title="Goddess Osiris.">
                    <img src="{{URL::asset('front/assets/img/imageNav/ اوزرييس.jfif')}}" alt="" style=" margin-left:40px">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/rp.jpg')}}" data-lightbox="my gallery" data-title="God Ra ">
                    <img src="{{asset('front/assets/img/imageNav/rp.jpg')}}" alt="" style=" margin-left: 40px;">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/sh.webp')}}" data-lightbox="my gallery" data-title="Goddess Shu">
                    <img src="{{URL::asset('front/assets/img/imageNav/sh.webp')}}" alt="" style="margin-left:45px ;">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/s.png')}}" data-lightbox="my gallery" data-title="God Tefnut">
                    <img src="{{asset('front/assets/img/imageNav/s.png')}}" alt="" style=" margin-left:45px">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/tu.jpg')}}" data-lightbox="my gallery" data-title="God Tut  ">
                    <img src="{{asset('front/assets/img/imageNav/tu.jpg')}}" alt="" style="margin-left: 40px;">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/g.jpg')}}" data-lightbox="my gallery" data-title="  God Geb">
                    <img src="{{URL::asset('front/assets/img/imageNav/g.jpg')}}" alt="" style="margin-left:40px ;">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/j.jpg')}}" data-lightbox="my gallery" data-title="Goddess Nut ">
                    <img src="{{asset('front/assets/img/imageNav/j.jpg')}}" alt="" style="margin-left:45px">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/o.jpg')}}" data-lightbox="my gallery" data-title="God Osiris ">
                    <img src="{{URL::asset('front/assets/img/imageNav/o.jpg')}}" alt="" style="margin-left: 45px;">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/نفتيس.jpg')}}" data-lightbox="my gallery" data-title=" Goddess Neftes">
                    <img src="{{asset('front/assets/img/imageNav/نفتيس.jpg')}}" alt="" style="margin-left:40px ;">

                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/t.jpg')}}" data-lightbox="my gallery" data-title=" God Set">
                    <img src="{{asset('front/assets/img/imageNav/t.jpg')}}" alt="" style="margin-left:40px ;">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/u.jfif')}}" data-lightbox="my gallery" data-title="  God Horus">
                    <img src="{{asset('front/assets/img/imageNav/u.jfif')}}" alt="" style=" margin-left:45px">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/m.jpg')}}" data-lightbox="my gallery" data-title="  Temple of Montu">
                    <img src="{{asset('front/assets/img/imageNav/m.jpg')}}" alt="" style=" margin-left:45px">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/p.jfif')}}" data-lightbox="my gallery" data-title=" Temple of Ptah">
                    <img src="{{asset('front/assets/img/imageNav/p.jfif')}}" alt="" style=" margin-left:40px">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/معبد ايزيس.jpg')}}" data-lightbox="my gallery" data-title="  Temple of Isis">
                    <img src="{{asset('front/assets/img/imageNav/معبد ايزيس.jpg')}}" alt="" style=" margin-left:40px">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/دندره.jfif')}}" data-lightbox="my gallery" data-title="  Temple of Dundre ">
                    <img src="{{asset('front/assets/img/imageNav/دندره.jfif')}}" alt="" style=" margin-left:45px">
                </a>
                <a href="{{URL::asset('front/assets/img/imageNav/معبد ادفو.jfif')}}" data-lightbox="my gallery" data-title=" Temple of Edfu ">
                    <img src="{{asset('front/assets/img/imageNav/معبد ادفو.jfif')}}" alt="" style=" margin-left:40px">
                </a>
            </div>
        </div>
        <script src="{{URL::asset('front/assets/js/lightbox-plus-jquery.min.js')}}"></script>
    </div>
    <?php
    include "footerblack.php"

    ?>
</body>

</html>
