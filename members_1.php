<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- this below makes the page center -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        
        
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        
        <title>Membership page</title>
        <!-- styles the page -->
        <link rel="stylesheet" type="text/css" href="members_style.css">
        <style></style>

    </head>
    
    <body>
        
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
        </nav> <!-- end of navigation bar -->
        
        
        
        <!-- start of Cards(Types of Membership) -->
        
        
                <div class="container-fluid">
                    <div class="grid-container">
                        <div class="grid-item">
                            <div class="card" style="width:400px">
                                <img class="card-img-top" src="images/Package_1.jpg" alt="Card image" style="width:100%">
                                <h4 class="card-title">PACKAGE 1</h4>
                                <div class="card-body">
                                  <p>Feeling committed? Well this package is for you to be as active as possible, while taking care of your wallet's well-being </p>
                                  <ul>
                                      <li>HOT discount benefits </li>
                                      <li>EARLY-BIRD privilege for events booking. </li>
                                  </ul>


                                <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>-->
                                  <a href="login.php" class="btn btn-primary">Subscribe</a> <!<!-- put your url link here -->
                              </div>
                            </div>
                            <br>
                        </div>            

                    <div class="grid-item">    
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="images/Package_2.jpg" alt="Card image" style="width:100%">
                            <h4 class="card-title">PACKAGE 2</h4>
                            <div class="card-body">
                              <p>HUGE bump in value, for a larger nibble from your wallet. Everything HEALTHY LIFESTYLE includes and more! Worth it? You decide. </p>
                              <ul>
                                  <li>EXTRA HOT discount benefits </li>
                                  <li>EARLY-BIRD privilege for events booking </li>
                                  <li>Able to HOST your own events and publish it </li>
                              </ul>


                            <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>-->
                              <a href="login.php" class="btn btn-primary">Subscribe</a> <!<!-- put your url link here -->
                          </div>
                        </div>
                        <br>
                        </div>
                    </div>  
                </div>
          
        <!<!-- End of Cards -->    
    
            
            
        
        
        
        
        
        
       

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
            });
        </script>
        
    </body>
</html>
