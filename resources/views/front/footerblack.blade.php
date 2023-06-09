<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/0c6829628d.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200;300;400;500;600;700;800;900;1000&display=swap");

        * {
            font-family: "cairo Play", cursive;
        }

        footer {
            background-color: rgb(22, 22, 22);
            width: 100%;
            box-sizing: border-box;

        }


        button {
            color: whitesmoke;
            font-size: 13px;
            padding: 12px 22px;
            margin: 20px;
            letter-spacing: 1px;
            border: 2px solid #cf7500;
            border-radius: 25px;
            background: linear-gradient(to right, transparent 50%, #cf7500 50%);
            background-size: 200%;
            background-position: left;
            transition: background-position 0.5s;
        }

        button:hover {
            background-position: right;
            color: white;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .row h2 {
            font-size: 22px;
            color: #cf7500;
        }

        .row a {
            display: block;
            text-decoration: none;
            padding: 15px;
            color: gray;
            font-size: 18px;

        }

        .row a:hover {
            font-size: 22px;
            color: white;
        }

        .column {
            float: left;
            width: 25%;
            padding-left: 100px;
            color: goldenrod;
            margin-top: 4%;

        }

        /* Clear floats after the columns */
        .row::after {
            content: "";
            display: table;
            clear: both;
        }

        .icons {
            text-align: center;
            margin-top: 2%;
        }

        .icons i {
            font-size: 20px;
            padding: 15px;
            color: #cf7500;
        }

        .icons i:hover {
            color: white;
            background-color: #cf7500;
            border-radius: 50%;

        }

        .copyright {
            text-align: center;
            margin-top: 2%;
            font-size: 20px;
            margin-bottom: 2%;
            color: grey;
        }

        .historical {
            padding-left: 170px;
        }

        @media screen and (max-width: 500px) {

            .column {
                width: 100%;
                text-align: center;
                margin-left: -50px;
            }

            .historical {
                padding-left: 100px;
            }

            .copyright {
                font-size: 15px;
                margin-left: -35px;
            }




        }
    </style>
</head>

<body>

    <footer>
        <div class="row" style="width: 100%;height:350px">
            <div class="column historical">
                <h2>Historical</h2>
                <a href="dark1.php">Religion</a>
                <a href="dark1.php">Gods</a>
                <a href="dark4.php">Temples</a>

            </div>

            <div class="column">
                <h2>About</h2>
                <a href="ranab.php">About us</a>
                <a href="contactblack.php">Contact us</a>
                <a href="ranab.php">Project's team</a>
            </div>

            <div class="column">
                <h2>Reservation</h2>
                <a href="rana.php">Trips</a>
                <a href="rana.php">Book your trip</a>
                <a href="shop.php">Online shop</a>
            </div>
            <div class="column">
                <h2>Account</h2>
                <a href="signinblack.php">Sign in</a>
                <a href="signupblack.php">Sign up</a>
                <a href="profile.php">Profile edit</a>
            </div>
        </div>

        <div class="icons">

            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="mailto:alan.mustafa.2002@gmail.com"><i class="fa-regular fa-envelope"></i></a>
        </div>

        <p class="copyright"><span style="color:#cf7500">&copy; Copyright : </span>Some pictures from Pinterest</p>
        <div style="text-align:center;background-color:black">
            <button><a href="#back" style="text-decoration: none; color:white">Back to top</a></button>
        </div>

    </footer>
</body>

</html>
