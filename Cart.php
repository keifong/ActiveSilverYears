<?php
    session_start();
    $database_name = "product_detail";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="Cart.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart.")</script>';
                echo '<script>alert("In the case of adding more, please delete first entry then add in quantity before adding to cart.")</script>';
                echo '<script>window.location="Cart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="Cart.php"</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="members_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            /*font-family: 'Titillium Web', sans-serif;*/
        }
        .product1{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: left;
            color: #000000;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: left;
            color: #000000;
            background-color: #efefef;
            
        }
        table th{
            background-color: #efefef;
        }
        .container {
            margin-top: 50px;
        }
       
        
    </style>
</head>
<body>
    
    <!-- Beginning of nav bar -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #FFC107">
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
    <!-- end of nav bar -->
    
    

    <div class="container" style="width: 65%">
        <h2>Shopping Cart</h2>
        <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product1">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>

        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["product_price"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="Cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <div id="paypal-payment-button">
                        </div>
                        <?php
                    }
                ?>
            </table>
            <script src="https://www.paypal.com/sdk/js?client-id=Ae3pNFsV1DaRs6QleNYFTDmg8Lvq7zUA5N2by5SGYV-BU9KptzeCImMdJkLY9cGa438jPzk0-iB1Xjbv&disable-funding=credit,card"></script><!-- added in &disable-funding=credit,card (WITHOUT SPACING to remove creditcard and debitcard payment option) -->
            <script>paypal.Buttons({style : {
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: <?php echo $total; ?> //money that is deducted 
                    //value: '' //money that is deducted
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("http://localhost/miniProject/success.php")
        })
    },
    onCancel: function (data) {
        window.location.replace("http://localhost/miniProject/Oncancel.php")
    }}).render('#paypal-payment-button');</script>
            <!--<script src="index.js"</script>-->
        </div>
    </div>
    
    

     <!-- Container (Contact Section) -->
        <div id="contact" class="container">
            <h3 class="text-center">Contact</h3>
            <p class="text-center"><em>We love our fans!</em></p>

            <div class="row">
                <div class="col-md-4">
                    <p>Fan? Drop a note.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
                    <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
                    <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                    <br>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <button class="btn pull-right" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <h3 class="text-center">From The Blog</h3>  
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Mike</a></li>
                <li><a data-toggle="tab" href="#menu1">Chandler</a></li>
                <li><a data-toggle="tab" href="#menu2">Peter</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h2>Mike Ross, Manager</h2>
                    <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h2>Chandler Bing, Guitarist</h2>
                    <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h2>Peter Griffin, Bass player</h2>
                    <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
                </div>
            </div>
        </div>

        <!-- Image of location/map -->
        <img src="map.jpg" class="img-responsive" style="width:100%">

        <!-- Footer -->
        <footer>
            <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a><br><br>
            
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
<!--                 <a href="about.php" data-toggle="tooltip" title="Our Terms & Conditions">Our Terms & Conditions</a>-->
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