<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Egyptian Gods |Profile</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="icon" type="image/x-icon" href="{{URL::asset('front/assets/img/Logo.png')}}" />
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{URL::asset('front/assets/css/headerr.css')}}">
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="{{URL::asset('front/assets/css/index.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('front/assets/css/profile - light.css')}}" />
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
                            <li><a class="dropdown-item" href="{{route('signUp')}}">Sign Up</a></li>
                            <li><a class="dropdown-item" href="{{route('profile')}}">Profile Edit</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="stroke"><a href="profile.php"><i class="fa-solid fa-circle-half-stroke"></i></a></div>
    </nav>

    <!-- profile start-->
    <main>
        <div class="leftContent">
            <div class="user">
                <div class="formImg">
                    <img src="{{URL::asset('front/assets/img/product/profilepic.webp')}}" alt="profile picture" />
                </div>
                <div class="bio">
                    <h1 class="userName">John Doe</h1>
                    <p class="title">Top member in Egyptian Gods</p>
                </div>
            </div>

            <ul class="tabs">
                <li class="activeTab" data-cont=".homeCont">Home</li>
                <li class="tabOne" data-cont=".aboutCont">About</li>
                <li class="tabTwo" data-cont=".privacyCont">Privacy</li>
                <li class="tabThree" data-cont=".notificationCont">Notifications</li>
            </ul>
        </div>

        <div class="tabContent">
            <div class="homeCont">
                <h3>HI THERE!</h3>

                <h1>I'M JOHN DOE</h1>

                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum ea
                    quas a officia adipisci explicabo porro quo vel nemo sit rem
                    possimus architecto, eos ad nam, excepturi, eaque perspiciatis
                    cupiditate. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Laborum enim quis vel, quaerat quos dolor accusamus veniam
                    blanditiis fuga reiciendis reprehenderit odio quo? Dicta
                    necessitatibus corrupti quaerat aliquam deserunt molestiae?
                </p>
            </div>
            <div class="aboutCont">
                <form action="profile.php" method="post">
                    <div class="headNotification">
                        <h1>Personal Information.</h1>
                        <p>About User.</p>
                    </div>
                    <!-- <div class="fullName"> -->
                    <label for="fullName">Full Name:</label>
                    <input type="text" id="fullName" name="fullName" placeholder="john doe" />
                    <!-- </div> -->
                    <!-- <div class="email"> -->
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="john@gmail.com" />
                    <!-- </div> -->
                    <!-- <div class="birthday"> -->
                    <label for="birthday">Birth Date:</label>
                    <input type="date" id="birthday" name="birthday" placeholder="09/29/2002" />

                    <!-- </div> -->
                    <!-- <div class="country"> -->
                    <label for="country">Country:</label>
                    <input type="text" id="country" name="country" placeholder="USA" />
                    <!-- </div> -->
                    <!-- <div class="telephone"> -->
                    <label for="telephone">Phone Number: </label>
                    <input type="tel" id="telephone" name="telephone" placeholder="212-456-7890" />
                    <!-- </div> -->
                </form>
            </div>

            <div class="privacyCont">
                <form action="profile.php" method="post">
                    <div class="headNotification">
                        <h1>Privacy and Setting.</h1>
                        <p>keep your privacy secrete.</p>
                    </div>
                    <label for="oldphone"> Enter Your Old Phone Number</label>
                    <input type="tel" id="oldphone" name="telephone" placeholder="212-456-7890" />
                    <div class="phone">
                        <div class="Direction">
                            <label for="newphone"> Enter Your New Phone Number</label>
                            <input type="tel" id="newphone" name="telephone" placeholder="212-456-7890" />
                        </div>

                        <div class="Direction">
                            <label for="confphone"> Confirm Your New Phone Number</label>
                            <input type="tel" id="confphone" name="telephone" placeholder="212-456-7890" />
                        </div>
                    </div>
                    <label for="oldMail">Enter Your Old E-mail Number</label>
                    <input type="email" id="oldMail" name="email" placeholder="john@gmail.com" required />
                    <div class="newmail">
                        <div class="Direction">
                            <label for="newMail">Enter Your New E-mail Number</label>
                            <input type="email" id="newMail" name="email" placeholder="john@gmail.com" required />
                        </div>

                        <div class="Direction">
                            <label for="confMail">Confirm Your New E-mail Number</label>
                            <input type="email" id="confMail" name="email" placeholder="john@gmail.com" required />
                        </div>
                    </div>

                    <label for="oldPass">Enter Your Old Password Number</label>
                    <input type="password" id="oldPass" name="password" required placeholder="8#mm2$nn" />
                    <div class="newpass">
                        <div class="Direction">
                            <label for="newPass">Enter Your New Password Number</label>
                            <input type="password" id="newPass" name="password" required placeholder="8#mm2$nn" />
                        </div>

                        <div class="Direction">
                            <label for="confPass">Confirm Your New Password Number</label>
                            <input type="password" id="confPass" name="password" required placeholder="8#mm2$nn" />
                        </div>
                    </div>
                    <input type="submit" value="submit" class="subActive" />
                </form>
            </div>
            <div class="notificationCont">
                <form action="profile.php">
                    <div class="headNotification">
                        <h1>Notifications</h1>
                        <p class="paravotification">
                            Turn promotional email notifications from Egyptian Gods on or
                            off
                        </p>
                    </div>
                    <div class="receve">
                        <h3>I want to receive:</h3>
                    </div>
                    <div class="allow">
                        <input type="checkbox" id="allowNotification" name="allownotification" value="allownotification" />
                        <label for="allowNotification">
                            Allow Notifications to be sent from the Online shop</label>
                    </div>
                    <div class="allow">
                        <input type="checkbox" id="announcementsNotification" name="announcementsNotification" value="announcementsNotification" />
                        <label for="announcementsNotification">Announcements for New Events</label>
                    </div>
                    <div class="allow">
                        <input type="checkbox" id="offersNotification" name="offersNotification" value="offersNotification" />
                        <label for="offersNotification">Notification for Exclusive Offers</label>
                    </div>
                    <div class="allow">
                        <input type="checkbox" id="deliveryNotification" name="deliveryNotification" value="deliveryNotification" />
                        <label for="deliveryNotification">Contact You After Delivery</label>
                    </div>
                    <div class="allow">
                        <input type="checkbox" id="tripNotification" name="tripNotification" value="tripNotification" />
                        <label for="tripNotification">Send Important Reminders About an Upcoming Trip</label>
                    </div>
                    <input type="button" value="save" class="saveActive" />
                </form>
            </div>
        </div>
    </main>
    <?php
    include "footer.php"
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{URL::asset{'front/assets/js/profile.js')}}"></script>
</body>

</html>
