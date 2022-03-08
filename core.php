<?php

// function for  activities

function activities(){
    include 'admin/db.php';
    $sel = mysqli_query($conn,"SELECT * FROM activities ");

    while($row = mysqli_fetch_array($sel)){

        echo'<article class="one-fourth">
        <figure><a href="hotel.html" title=""><img src="upload/'.$row['pic'].'" alt=""  style="width:100%; height:200px!important;"/></a></figure>
        <div class="details">
            <h3>'.$row['title'].'
                <span class="stars">
                    <i class="material-icons">&#xE838;</i>
                    <i class="material-icons">&#xE838;</i>
                    <i class="material-icons">&#xE838;</i>
                    <i class="material-icons">&#xE838;</i>
                </span>
            </h3>
            <!-- <span class="address">London  •  <a href="hotels.html#">Show on map</a></span> -->
            <!--<span class="rating"> 8 /10</span>-->
            <span class="price">Price per day  <em>$ '.$row['price'].'</em> </span>
            <div class="description">
                <p>'.$row['description'].' </p>
            </div>
            <a href="ba1.php?actid='.$row['id'].'&type=activities" title="Book now" class="gradient-button">Book now</a>
        </div>
    </article>';

    }
}

// function for Activities slideshow
function Slideactivities(){
    include 'admin/db.php';

    $sel = mysqli_query($conn,"SELECT * FROM activities ");

    while($row = mysqli_fetch_array($sel)){

        echo '
        <li data-thumb="upload/'.$row['pic'].'"> 
             <img src="upload/'.$row['pic'].'"  style= "width:100%;" alt="" />
        </li>
    ';
    }
}

// function for header bar

function hbar(){
    echo'<header class="header">
    <div class="wrap">
        <!--logo-->
        <div class="logo"><a href="index.php" title="Book Your Travel"><img src="images/txt/logo.png" alt="Book Your Travel" /></a></div>
        <!--//logo-->
        
        <!--ribbon-->
        <div class="ribbon">
            <nav>
                <ul class="profile-nav">
                    <li class="active"><a href="#" title="My Account">My Account</a></li>
                    <!--<li><a href="login.html" title="Login">Login</a></li>
                    <li><a href="my_account.html" title="Settings">Settings</a></li>-->
                </ul>
                <ul class="lang-nav">
                    <li class="active"><a href="index.php#" title="English (US)">English (US)</a></li>
                    <li><a href="#" title="English (UK)">English (UK)</a></li>
                    <li><a href="#" title="Deutsch">Deutsch</a></li>
                    <li><a href="#" title="Italiano">Italiano</a></li>
                    <li><a href="#" title="Русский">Русский</a></li>
                </ul>
                <ul class="currency-nav">
                    <li class="active"><a href="index.php#" title="$US Dollar">$US Dollar</a></li>
                    <li><a href="index.php#" title="€ Euro">€ Euro</a></li>
                    <li><a href="index.php#" title="£ Pound">£ Pound</a></li>
                </ul>
            </nav>
        </div>
        <!--//ribbon-->
        
        <!--search-->
        <div class="search">
            <form id="search-form" method="get" action="#">
                <input type="search" placeholder="Search entire site here" name="site_search" id="site_search" /> 
                <input type="submit" id="submit-site-search" value="submit-site-search" name="submit-site-search"/>
            </form>
        </div>
        <!--//search-->
        
        <!--contact-->
        <div class="contact">
            <span>24/7 Support number</span>
            <span class="number">+233(0)244044013</span>
        </div>
        <!--//contact-->
    </div>
    
    <!--main navigation-->
    <nav class="main-nav">
        <div class="wrap">
            <ul class="slimmenu" id="nav">

            <li><a href="index.php" title="Home">Home</a></li>
                <li><a href="activities.php" title="Activities">Activities</a>
                <li><a href="accomodation.php" title="Accomodation">Accomodation</a>

                <li><a href="tour.php" title="Accomodation">Tour Services</a>
                <!--<li><a href="hotels.html" title="Hotels">Hotels</a>
                    <ul>
                        <li><a href="index.html#">Secondary navigation</a></li>
                        <li><a href="index.html#">Example links</a>
                            <ul>
                                <li><a href="index.html#">Third level navigation</a></li>
                                <li><a href="index.html#">Example links</a>
                                    <ul>
                                        <li><a href="index.html#">Fourth level navigation</a></li>
                                        <li><a href="index.html#">Example links</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>-->
                <!--<li><a href="flights.html" title="Flights">Flights</a></li>
                <li><a href="flight_and_hotels.html" title="Flight + Hotel">Flight + Hotel</a></li>
                <li><a href="self_caterings.html" title="Self catering">Self catering</a></li>
                <li><a href="cruises.html" title="Cruises">Cruises</a></li>
                <li><a href="car_rentals.html" title="Car rental">Car rental</a></li>-->
                <li><a href="locations.php" title="Locations">Locations</a>
                   <!-- <ul>
                        <li><a href="locations.php" title="Single Location">Single Location</a>
                    </ul>-->
                </li>
                <!--<li><a href="hot_deals.html" title="Hot deals">Hot deals</a></li>-->
                <li class="has-mega"><a href="index.html#" title="Pages">Pages</a>
                    <ul class="mega">
                        <li>
                            <div class="row">
                                <div class="one-fifth">
                                    <p>COMMON PAGES</p>
                                    <ul>
                                        <li><a href="page_left_sidebar.html" title="Page with left sidebar">Page with left sidebar</a></li>
                                        <li><a href="page_right_sidebar.html" title="Page with right sidebar">Page with right sidebar</a></li>
                                        <li><a href="page_both_sidebars.html" title="Page with both sidebars">Page with both sidebars</a></li>
                                        <li><a href="page_no_sidebars.html" title="Page with no sidebars">Page with no sidebars</a></li>
                                    </ul>
                                </div>
                                <div class="one-fifth">
                                    <p>LISTING LAYOUTS</p>
                                    <ul>
                                        <li><a href="hotels_2col.html" title="Listing 2 columns">Listing 2 columns</a></li>
                                        <li><a href="hotels_3col.html" title="Listing 3 columns">Listing 3 columns</a></li>
                                        <li><a href="hotels.html" title="Listing 4 columns">Listing 4 columns</a></li>
                                        <li><a href="hotel.html" title="Single listing">Single listing</a></li>
                                    </ul>
                                </div>
                                <div class="one-fifth">
                                    <p>USER PAGES</p>
                                    <ul>
                                        <li><a href="login.html" title="Login">Login</a></li>
                                        <li><a href="register.html" title="Register">Register</a></li>
                                        <li><a href="my_account.html" title="My Account">My account</a></li>
                                        <li><a href="error.html" title="Error 404">Error 404</a></li>
                                    </ul>
                                </div>
                                <div class="one-fifth">
                                    <p>SPECIALTY PAGES</p>
                                    <ul>
                                        <li><a href="search_results.html" title="Search results hotels">Search results hotels</a></li>
                                        <li><a href="search_results_flights.html" title="Search results flights">Search results flights</a></li>
                                        <li><a href="get_inspired.html" title="Get inspired">Get inspired</a></li>
                                        <li><a href="get_inspired_results.html" title="Get inspired results">Get inspired results</a></li>
                                    </ul>
                                </div>
                                <div class="one-fifth">
                                    <p>&nbsp;</p>
                                    <ul>
                                        <li><a href="booking-step1.html" title="Booking step 1">Booking step 1</a></li>
                                        <li><a href="booking-step2.html" title="Booking step 2">Booking step 2</a></li>
                                        <li><a href="booking-step3.html" title="Booking step 3">Booking step 3</a></li>
                                        <li><a href="loading.html" title="Loading">Loading</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="contact.php" title="Contact">Contact</a></li>
                <li><a href="about.php" title="Blog">About US</a>
                    <!--<ul>
                        <li><a href="blog_single.html" title="Single Post">Single Post</a>
                    </ul>-->
                </li>
               
            </ul>
        </div>
    </nav>
    <!--//main navigation-->
</header>';
}



// Displaying accomodation 

function Accomo(){
    include 'admin/db.php';
    $sel = mysqli_query($conn,"SELECT * FROM acomo ");

    while($row = mysqli_fetch_array($sel)){

        echo'<article class="one-third">
        <figure><a href="#" title=""><img src="upload/'.$row['pic'].'" alt=""  style="width:100%; height:200px!important;"/></a></figure>
        <div class="details">
            <h3>'.$row['title'].' 
                <span class="stars">
                    <i class="material-icons">&#xE838;</i>
                    <i class="material-icons">&#xE838;</i>
                    <i class="material-icons">&#xE838;</i>
                    <i class="material-icons">&#xE838;</i>
                </span>
            </h3>
            <span class="address">Type :    <a href="#">'.$row['ltype'].'</a></span>
            <!-- <span class="rating"> 8 /10</span> -->
            <span class="price">Price   <em>$ '.$row['price'].'</em> </span>
            <div class="description">
                <p>
                    <ul>';

                    $string=$row['description'];
                    

                    $string=explode(',',$string);
                   
                    foreach($string as $val)
                    {
                         echo '<li>'. $val.'</li>';
                        $val=explode('. ',$val);
    // mysql_query('INSERT INTO yourtable (col_number,col_name) VALUES ("'.$val[0].'.","'.$val[1].'")';
                    }
    
                        
                    echo'</ul>
                     <a href="#">More info</a>
                </p>
            </div>
            <a href="ba1.php?actid='.$row['id'].'&type=accomodation" title="Book now" class="gradient-button">Book now</a>
        </div>
    </article>';

    }
}


// Display Tour services 


function Tour(){
    include 'admin/db.php';
    $sel = mysqli_query($conn,"SELECT * FROM tour ");

    while($row = mysqli_fetch_array($sel)){

        echo'<article class="one-third">
        <figure><a href="#" title=""><img src="upload/'.$row['pic'].'" alt=""  style="width:100%; height:200px!important;"/></a></figure>
        <div class="details">
            <h3>'.$row['title'].' 
                <span class="stars">
                    <i class="material-icons">&#xE838;</i>
                    <i class="material-icons">&#xE838;</i>
                    <i class="material-icons">&#xE838;</i>
                    <i class="material-icons">&#xE838;</i>
                </span>
            </h3>
            <!--<span class="address">Type :    <a href="#"></a></span>-->
            <!-- <span class="rating"> 8 /10</span> -->
            <span class="price">Price   <em>$ '.$row['price'].'</em> </span>
            <div class="description">
                <p>
                    <ul>';

                    $string=$row['description'];
                    

                    $string=explode(',',$string);
                   
                    foreach($string as $val)
                    {
                         echo '<li>'. $val.'</li>';
                        $val=explode('. ',$val);
    // mysql_query('INSERT INTO yourtable (col_number,col_name) VALUES ("'.$val[0].'.","'.$val[1].'")';
                    }
    
                        
                    echo'</ul>
                     <a href="#">More info</a>
                </p>
            </div>
            <a href="ba1.php?actid='.$row['id'].'&type=Tour-Service" title="Book now" class="gradient-button">Book now</a>
        </div>
    </article>';

    }
}


// Llocations 

function Location(){
    include 'admin/db.php';
    $sel = mysqli_query($conn,"SELECT * FROM location ");

    while($row = mysqli_fetch_array($sel)){

        echo'<article class="one-fourth">
        <figure><a href="index.html#" title=""><img src="upload/'.$row['pic'].'" alt="" style="width:100%; height:200px!important;"/></a></figure>
        <div class="details">
            <h3>'.$row['title'].'</h3>
            <a href="view-location.php?mid='.$row['id'].'" title="View details" class="gradient-button">View </a>
        </div>
    </article>';

    }
}


function Popularloc($myid){
    include 'admin/db.php';
    $sp= mysqli_query($conn,"SELECT * FROM location LIMIT 5");
    while ($row = mysqli_fetch_array($sp)) {

        if($row['id']==$myid){

        }
        else{
            echo'<li>
            <a href="view-location.php?mid='.$row['id'].'">
                <h3>'.$row['title'].'
                    <span class="stars">
                        <i class="material-icons">&#xE838;</i>
                        <i class="material-icons">&#xE838;</i>
                        <i class="material-icons">&#xE838;</i>
                        <i class="material-icons">&#xE838;</i>
                    </span>
                </h3>
                <!--<p>From <span class="price">$ 100 <small>/ per night</small></span></p>
                <span class="rating"> 8 /10</span>-->
            </a>
        </li>';
        }
        # code...
    }
}





function ft(){
    echo '<footer class="footer">
    <div class="wrap">
        <div class="row">
            <!--column-->
            <article class="one-fourth">
                <h6>ButterCups Tours</h6>
                <p>27 Lesley Opoku Ware Drive,<br>Kumasi- Ghana</p>
                <p><em>P:</em> 24/7 customer support: +233(0)244044013</p>
                <p><em>E:</em> <a href="contact.html#" title="buttercupstours@outlook.com">buttercupstours@outlook.com</a></p>
            </article>
            <!--//column-->
            
            <!--column-->
            <article class="one-fourth">
                <h6>Customer support</h6>
                <ul>
                    <li><a href="contact.html#" title="Faq">Faq</a></li>
                    <li><a href="contact.html#" title="How do I make a reservation?">How do I make a reservation?</a></li>
                    <li><a href="contact.html#" title="Payment options">Payment options</a></li>
                    <li><a href="contact.html#" title="Booking tips">Booking tips</a></li>
                </ul>
            </article>
            <!--//column-->
            
            <!--column-->
            <article class="one-fourth">
                <h6>Follow us</h6>
                <ul class="social">
                        <li><a href="contact.html#" title="facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
                        <li><a href="contact.html#" title="youtube"><i class="fa  fa-fw fa-youtube"></i></a></li>
                        <li><a href="contact.html#" title="rss"><i class="fa  fa-fw fa-rss"></i></a></li>
                        <li><a href="contact.html#" title="gplus"><i class="fa fa-fw fa-google-plus"></i></a></li>
                        <li><a href="contact.html#" title="linkedin"><i class="fa fa-fw fa-linkedin"></i></a></li>
                        <li><a href="contact.html#" title="twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
                        <li><a href="contact.html#" title="pinterest"><i class="fa fa-fw fa-pinterest-p"></i></a></li>
                        <li><a href="contact.html#" title="vimeo"><i class="fa fa-fw fa-vimeo"></i></a></li>
                    </ul>
            </article>
            <!--//column-->
            
            <!--column-->
            <article class="one-fourth">
                <h6>Don’t miss our exclusive offers</h6>
                <form id="newsletter" action="newsletter.php" method="post">
                    <fieldset>
                        <input type="email" id="newsletter_signup" name="newsletter_signup" placeholder="Enter your email here" />
                        <input type="submit" id="newsletter_submit" name="newsletter_submit" value="Signup" class="gradient-button" />
                    </fieldset>
                </form>
            </article>
            <!--//column-->
            
            <div class="bottom full-width">
                <p class="copy">Copyright '.date("Y").'  Buttercups Tours ltd. All rights reserved</p>
                <nav>
                    <ul>
                        <li><a href="contact.html#" title="About us">About us</a></li>
                        <li><a href="contact.html" title="Contact">Contact</a></li>
                        <li><a href="contact.html#" title="Partners">Partners</a></li>
                        <li><a href="contact.html#" title="Customer service">Customer service</a></li>
                        <li><a href="contact.html#" title="FAQ">FAQ</a></li>
                        <li><a href="contact.html#" title="Careers">Careers</a></li>
                        <li><a href="contact.html#" title="Terms & Conditions">Terms &amp; Conditions</a></li>
                        <li><a href="contact.html#" title="Privacy statement">Privacy statement</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>';
}

?>