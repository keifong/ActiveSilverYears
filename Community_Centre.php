<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="members_style.css">
        <title></title>
    </head>
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
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
<h2>Community Activities</h2>

<div class="card">
    <img src="images/elderly_canoe.jpg" alt="Community Centre activities" style="width:100%">
  <div class="container">
    <h4><b>Elderly Canoe Trip</b></h4> 
    <p>The canoe trip will be organised annually to help elderly exercise more. This helps elderly to communicate more with their peers as it requires teamwork to make the canoe move in the desired direction. Through this activity, elderly will become fitter and they will get to know more people who come from different parts of Singapore. Also. this helps elderly to have a habit of exercising daily so that they will remain healthy.</p> 
  </div>
</div>
<div class="card">
    <img src="images/elderly_games_community centre.jpg" alt="Community Centre acitivities" style="width:100%">
  <div class="container">
    <h4><b>Gen Silver Champion Cup</b></h4> 
    <p>This event is organised for elderly to play against each other, some games require them to think of strategies to win. This helps elderly to keep their brain working so that they will not have dementia. As shown in the picture above, two elderly are holding two long sticks and they need to drop the ball into one of the three baskets placed on the ground. This activity requires hand coordination and communication between the two elderly as the ball on the stick might drop if they did not position the sticks properly.</p> 
  </div>
</div>

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
    </body>
</html>
