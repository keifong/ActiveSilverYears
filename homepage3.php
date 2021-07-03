<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>

        <title>Get Moving</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            body {
                font: 400 15px/1.8 Lato, sans-serif;
                color: #777;
            }
            h3, h4 {
                margin: 10px 0 30px 0;
                letter-spacing: 10px;      
                font-size: 20px;
                color: #111;
            }
            .container {
                padding: 80px 120px;
            }
            .person {
                border: 10px solid transparent;
                margin-bottom: 25px;
                width: 80%;
                height: 80%;
                opacity: 0.7;
            }
            .person:hover {
                border-color: #f1f1f1;
            }
            .carousel-inner img {
                /*    -webkit-filter: grayscale(90%);*/
                /*    filter: grayscale(90%); */
                /* make all photos black and white */ 
                width: 100%; /* Set width to 100% */
                margin: auto;
            }
            .carousel-caption h3 {
                color: greenyellow !important;
                font-weight: bold;
            }
            @media (max-width: 600px) {
                .carousel-caption {
                    display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
                }
            }
            .bg-1 {
                background: #2d2d30;
                color: #bdbdbd;
            }
            .bg-1 h3 {color: #fff;}
            .bg-1 p {font-style: italic;}
            .list-group-item:first-child {
                border-top-right-radius: 0;
                border-top-left-radius: 0;
            }
            .list-group-item:last-child {
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }
            .thumbnail {
                padding: 0 0 15px 0;
                border: none;
                border-radius: 0;
            }
            .thumbnail p {
                margin-top: 15px;
                color: #555;
            }
            .btn {
                padding: 10px 20px;
                background-color: #333;
                color: #f1f1f1;
                border-radius: 0;
                transition: .2s;
            }
            .btn:hover, .btn:focus {
                border: 1px solid #333;
                background-color: #fff;
                color: #000;
            }
            .modal-header, h4, .close {
                background-color: #333;
                color: #fff !important;
                text-align: center;
                font-size: 30px;
            }
            .modal-header, .modal-body {
                padding: 40px 50px;
            }
            .nav-tabs li a {
                color: #777;
            }
            #googleMap {
                width: 100%;
                height: 400px;
                -webkit-filter: grayscale(100%);
                filter: grayscale(100%);
            }  
            .navbar {
                font-family: Montserrat, sans-serif;
                margin-bottom: 0;
                background-color: #FFC107;
                border: 0;
                font-size: 11px !important;
                letter-spacing: 4px;

            }
            .navbar li a, .navbar .navbar-brand { 
                color: #FFFFFF !important;
            }
            .navbar-nav li a:hover {
                color: #fff !important;
            }
            .navbar-nav li.active a {
                color: #fff !important;
                background-color: #29292c !important;
            }
            .navbar-default .navbar-toggle {
                border-color: transparent;
            }
            .open .dropdown-toggle {
                color: #fff;
                background-color: #555 !important;
            }
            .dropdown-menu li a {
                color: #000 !important;
                padding: 12px 16px;
            }
            .dropdown:hover .dropdown-menu {display: block;}
            
            .dropdown-toggle:hover {
                background-color: #000 !important;
            }

            .dropdown-menu li a:hover {
                background-color: #000 !important;
            }
            footer {
                background-color: #2d2d30;
                color: #f5f5f5;
                padding: 32px;
            }
            footer a {
                color: #f5f5f5;
            }
            footer a:hover {
                color: #777;
                text-decoration: none;
            }  
            .form-control {
                border-radius: 0;
            }
            textarea {
                resize: none;
            }





            /*            .dropbtn1 {
              background-color: #4CAF50;
              color: white;
              padding: 16px;
              font-size: 16px;
              border: none;
            }
            
             The container <div> - needed to position the dropdown content 
            .dropdown1 {
              position: relative;
              display: inline-block;
            }
            
             Dropdown Content (Hidden by Default) 
            .dropdown-content1 {
              display: none;
              position: absolute;
              background-color: #f1f1f1;
              min-width: 160px;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
            }
            
             Links inside the dropdown 
            .dropdown-content1 a {
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
            }
            
             Change color of dropdown links on hover 
            .dropdown-content1 a:hover {background-color: #ddd;}
            
             Show the dropdown menu on hover 
            .dropdown1:hover .dropdown-content1 {display: block;}
            
             Change the background color of the dropdown button when the dropdown content is shown 
            .dropdown1:hover .dropbtn1 {background-color: #3e8e41;}*/
        </style>
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

        <nav class="navbar navbar-default navbar-fixed-top" >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="homepage3.php">Get Moving!</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <!--                        <li><a href="#myPage">INFORMATION</a></li>
                                                <li><a href="#band">ACTIVITIES</a></li>
                                                <li><a href="#tour">ARE YOU A MEMBER?</a></li>
                                                <li><a href="#contact">BUY TICKETS</a></li>-->

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">INFORMATION
                                <!--                                  <span class="caret"></span>-->
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="Singapore_zoo.php">Singapore Zoo</a></li>
                                <li><a href="Park.php">Parks</a></li>
                                <li><a href="Community_Centre.php">Community Centre</a></li> 
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#">ACTIVITIES
                                <!--                                  <span class="caret"></span>-->
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="activities.php">View Upcoming Events</a></li>
                                <li><a href="createActivity.php">Host an Event</a></li>

                            </ul>
                        </li> 

<!--                        <li class="dropdown">
                            <a class="dropdown-toggle" href="members_1.php">MEMBERS
                                                                  <span class="caret"></span>
                            </a>
                                                              <ul class="dropdown-menu">
                                                                <li><a href="#">Merchandise</a></li>
                                                                <li><a href="#">Extras</a></li>
                                                                <li><a href="#">Media</a></li> 
                                                              </ul>
                        </li>-->

                        <li class="dropdown">
                            <a class="dropdown-toggle" href="Cart.php">BUY TICKETS
                                <!--                                  <span class="caret"></span>-->
                            </a>
                            <!--                                  <ul class="dropdown-menu">
                                                                <li><a href="#">Merchandise</a></li>
                                                                <li><a href="#">Extras</a></li>
                                                                <li><a href="#">Media</a></li> 
                                                              </ul>-->
                        </li>


                        <!--                        <li class="dropdown1">
                                                    <button class="dropbtn1">Drop down</button>
                                                    <div class="dropdown-content1">
                                                        <a href="#">Link 1</a>
                                                        <a href="#">Link 2</a>
                                                        <a href="#">Link 3</a>
                                                    </div>
                                                </li>-->


                        <!--                        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>-->
                    </ul>
                </div>
            </div>
        </nav>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/elderlyhand.jpg" alt="New York" width="1200" height="700">
                    <div class="carousel-caption">
                        <h3>Keeping Fit Together!</h3>
<!--                        <p>Example Text</p>-->
                    </div>      
                </div>

                <div class="item">
                    <img src="images/elderlygbtb.jpg" alt="Chicago" width="1200" height="700">
                    <div class="carousel-caption">
                        <h3>Enjoying The Fresh Air!</h3>
<!--                        <p>Example Text 2</p>-->
                    </div>      
                </div>

                <div class="item">
                    <img src="images/riversafari.jpg" alt="Los Angeles" width="1200" height="700">
                    <div class="carousel-caption">
                        <h3>River Safari Fun!</h3>
<!--                        <p>Example Text 3</p>-->
                    </div>      
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Container (The Band Section) -->
        <div id="band" class="container text-center">
            <h3>Active Aging</h3>
            <p><em>Raise Awareness</em></p>
            <p>We hope to promote active aging within elderly and encourage them to participate events organised by the places such as the Singapore Zoo, Parks and Community Centres. Through all these activities, elderly will have a healthier lifestyle and also make more friends so that they can exercise together.</p>
            <br>
<!--            <div class="row">
                <div class="col-sm-4">
                    <p class="text-center"><strong>Name</strong></p><br>
                    <a href="#demo" data-toggle="collapse">
                        <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                    </a>
                    <div id="demo" class="collapse">
                        <p>Guitarist and Lead Vocalist</p>
                        <p>Loves long walks on the beach</p>
                        <p>Member since 1988</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="text-center"><strong>Name</strong></p><br>
                    <a href="#demo2" data-toggle="collapse">
                        <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                    </a>
                    <div id="demo2" class="collapse">
                        <p>Drummer</p>
                        <p>Loves drummin'</p>
                        <p>Member since 1988</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <p class="text-center"><strong>Name</strong></p><br>
                    <a href="#demo3" data-toggle="collapse">
                        <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
                    </a>
                    <div id="demo3" class="collapse">
                        <p>Bass player</p>
                        <p>Loves math</p>
                        <p>Member since 2005</p>
                    </div>
                </div>
            </div>-->
        </div>

        <!-- Container (TOUR Section) -->
        <div id="tour" class="bg-1">
            <div class="container">
                <h3 class="text-center">PLACES OF ATTRACTION</h3>
                <p class="text-center">There are various activities available.<br> Remember to book your tickets!</p>
<!--                <ul class="list-group">
                    <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
                    <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li> 
                    <li class="list-group-item">November <span class="badge">3</span></li> 
                </ul>-->

                <div class="row text-center">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="images/panda.jpg" alt="Zoo" width="400" height="300">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="images/river_safari.jpg" alt="River Safari" width="400" height="300">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="images/park_activity.jpg" alt="Park" width="400" height="300">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
                        </div>
                        <div class="modal-body">
                            <form role="form">
                                <div class="form-group">
                                    <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
                                    <input type="number" class="form-control" id="psw" placeholder="How many?">
                                </div>
                                <div class="form-group">
                                    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
                                    <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                                </div>
                                <button type="submit" class="btn btn-block">Pay 
                                    <span class="glyphicon glyphicon-ok"></span>
                                </button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span> Cancel
                            </button>
                            <p>Need <a href="#">help?</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Container (Contact Section) -->
        <div id="contact" class="container">
            <h3 class="text-center">Meet The Team Behind Get Moving!</h3>
<!--            <p class="text-center"><em>We love our fans!</em></p>-->

           
            <br>
<!--            <h3 class="text-center">From The Blog</h3>  
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Mike</a></li>
                <li><a data-toggle="tab" href="#menu1">Chandler</a></li>
                <li><a data-toggle="tab" href="#menu2">Peter</a></li>
            </ul>-->

            <div class="row">
                    <div class="col-sm-3">
                        <p class="text-center"><strong>Chia Kei Fong</strong></p><br>
                        <a href="#demo" data-toggle="collapse">
                            <img src="images/keifong.jpg" class="img-circle" alt="Random Name" width="200" height="200">
                        </a>
                        <div id="demo" class="collapse">                          
                            <p>keifong@gmail.com</p>
                            <p>Likes playing piano</p>
                            <p>Likes to play sports</p>
                                                     
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <p class="text-center"><strong>Hazwan Bin Ahmad Zaki</strong></p><br>
                        <a href="#demo2" data-toggle="collapse">
                            <img src="images/hazwan.jpg" class="img-circle" alt="Random Name" width="200" height="200" style="">
                        </a>
                        <div id="demo2" class="collapse">
                            <p>hazwan@gmail.com</p>
                            <p>Likes sleeping</p>
                            <p>Likes to cycle</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <p class="text-center"><strong>Chua Jia Jun</strong></p><br>
                        <a href="#demo3" data-toggle="collapse">
                            <img src="images/photo_portrait.jpg" class="img-circle" alt="Random Name" width="200" height="200">
                        </a>
                        <div id="demo3" class="collapse">
                            <p>jiajun@gmail.com</p>
                            <p>Loves snooker</p>
                            <p>Likes to go roller blading</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <p class="text-center"><strong>Andy Tan</strong></p><br>
                        <a href="#demo4" data-toggle="collapse">
                            <img src="images/andy.jpg" class="img-circle" alt="Random Name" width="200" height="200">
                        </a>
                        <div id="demo4" class="collapse">
                            <p>andy@gmail.com</p>
                            <p>Loves math</p>
                            <p>Likes mobile games</p>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Image of location/map -->
<!--        <img src="map.jpg" class="img-responsive" style="width:100%">-->

        <!-- Footer -->
        <footer>
<!--            <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a><br><br>-->
            
            <div style="float: left; padding-right: 30px;">
            <h2>Need Help?</h2>
            
            <a href="contactus.php" data-toggle="tooltip" title="Contact Us">Contact Us</a>
                <p>
                <a href="FAQ.php" data-toggle="tooltip" title="FAQ">FAQ</a>
            </div>
            
            <div>
             <h2>About Us</h2>
             
                 <a href="about.php" data-toggle="tooltip" title="About">About</a>
                 <p>
<!--                 <a href="termscondtion.php" data-toggle="tooltip" title="Our Terms & Conditions">Our Terms & Conditions</a>-->
            </div>
        </footer>

        <script>
            $(document).ready(function () {
                // Initialize Tooltip
                $('[data-toggle="tooltip"]').tooltip();

                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {

                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 900, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            })
        </script>

    </body>
</html>