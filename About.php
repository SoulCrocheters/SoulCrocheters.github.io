<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="images/logo.png">    
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <title>About</title>
        <style>
            body{
                background-image: url("images/wallpaper.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                overflow: hidden;
            }
            .flip-card {
                background-color: transparent;
                width: 600px;
                height: 400px;
                perspective: 1000px; /* Remove this if you don't want the 3D effect */
                margin-left: auto;
                margin-right: auto;
                margin-top: 90px;
            }

            /* This container is needed to position the front and back side */
            .flip-card-inner {
                position: relative;
                width: 100%;
                height: 100%;
                text-align: center;
                transition: transform 0.8s;
                transform-style: preserve-3d;
            }

            /* Do an horizontal flip when you move the mouse over the flip box container */
            .flip-card:hover .flip-card-inner {
                transform: rotateY(180deg);
            }

            /* Position the front and back side */
            .flip-card-front, .flip-card-back {
                position: absolute;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden; /* Safari */
                backface-visibility: hidden;
            }
            /* Style the back side */
            .flip-card-back {
                background-image: url("images/card2.jpg");
                color: black;
                transform: rotateY(180deg);
                width: 600px;
                height: 400px;
            }
            row{
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand">
                <img src="images/logo.png" width="30" height="30" alt="">&nbsp;
                Soul Crocheters
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/card.jpg" alt="Avatar" style="width:600px;height:400px;">
                </div>
                <div class="flip-card-back">
                    <div class="row">
                        <div class="col-6 col-sm-4"><u style="font-size: 30px;">Contact </u></div>
                        <div class="w-100"></div>
                        <br/>
                        <div class="col-6 col-sm-3"><i class="fa fa-shopping-cart" style="font-size:35px;"></i></div>
                        <div class="col-6 col-sm-4"><a href="https://carousell.com/u/soulcrocheters/"style="font-size: 20px">Visit my Carousell</a></div>
                        <br/>
                        <!-- Force next columns to break to new line -->
                        <div class="w-100"></div>
                        <br/>
                        <div class="col-6 col-sm-3"><i class="fa fa-instagram" style="font-size:35px;"></i></div>
                        <div class="col-6 col-sm-4"><a href="https://www.instagram.com/soulcrocheters/"style="text-decoration:none; font-size: 20px">@soulcrocheters</a></div>
                        <div class="w-100"></div>
                        <br/>
                        <div class="col-6 col-sm-3"><i class="fa fa-phone" style="font-size:35px;"></i></div>
                        <div class="col-6 col-sm-4"><b style="font-size: 20px;">+65 8838-5178</b></div>
                    </div>
                </div>
            </div>
        </div>
    </body>                     
</html>
