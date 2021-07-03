<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

THIS IS THE BEGINNING


https://www.youtube.com/watch?v=NXAHkqiIepc&ab_channel=EasyTutorials for login n logout form
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> User Login And Registration </title>
        <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="stylesheet" type="text/css" href="members_style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">-->
        
        
        
        
    </head>
    <body>
        
        <!-- Beginning of Nav bar -->
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #FFC107">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="">Get Moving!</a>
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
                                <li><a href="">Singapore Zoo</a></li>
                                <li><a href="">Parks</a></li>
                                <li><a href="">Community Centre</a></li> 
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#">ACTIVITIES
                                <!--                                  <span class="caret"></span>-->
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="">View Upcoming Events</a></li>
                                <li><a href="">Host an Event</a></li>

                            </ul>
                        </li> 

<!--                        <li class="dropdown">
                            <a class="dropdown-toggle" href="">MEMBERS
                                                                  <span class="caret"></span>
                            </a>
                                                              <ul class="dropdown-menu">
                                                                <li><a href="#">Merchandise</a></li>
                                                                <li><a href="#">Extras</a></li>
                                                                <li><a href="#">Media</a></li> 
                                                              </ul>
                        </li>-->

                        <li class="dropdown">
                            <a class="dropdown-toggle" href="">BUY TICKETS
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
        </nav>  <!-- end of navigation bar -->
        
        <!-- beginning of registration and login -->
        <div class="container">
            <div class="login-box">
            <div class="row">
            <div class="col-md-6 login-left">
                <h2> Login Here </h2>  
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>Username: </label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password: </label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
<!--                    <div class="form-group">
                        <label>Package 1 or 2: </label>
                        <input type="range" min="1" max="2" name="package" class="form-control1" required>
                    </div>-->
                    
                    <button type="submit" class="btn btn-primary"> Login </button>
                    
                </form>
            </div>
                
            <div class="col-md-6 login-right" >
                <h2> Register Here </h2>  
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>Username: </label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password: </label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
<!--                    <div class="form-group">
                        <label>Package 1 or 2: </label>
                        <input type="range" min="1" max="2" name="package" class="form-control1" required>
                    </div>-->

                    <button type="submit" class="btn btn-primary"> Register </button>
                    
                </form>
            </div>
                
        </div> 
        </div>
        </div>  
        <!-- end of registration and login -->
        
        <!-- footer -->
       

        <!-- Footer -->
        <footer>
<!--            <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a><br><br>-->
            
            <div style="float: left; padding-right: 30px;">
            <h2>Need Help?</h2>
            
            <a href="" data-toggle="tooltip" title="Contact Us">Contact Us</a>
                <p>
                <a href="" data-toggle="tooltip" title="FAQ">FAQ</a>
            </div>
            
            <div>
             <h2>About Us</h2>
             
                 <a href="" data-toggle="tooltip" title="About">About</a>
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
        
        <!-- end of footer -->
        
    </body>
</html>
