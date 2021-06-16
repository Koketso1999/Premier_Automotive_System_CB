<?php
$con = mysqli_connect("localhost","root","","dbfix") or die("Unable to connect ");

if(isset($_POST['check'])){
    //  echo '<script>alert("BUTTON WORKS")</script>';
    $code = $_POST['code'];
    $query= "SELECT codice FROM oggetti WHERE codice = '$code'";
    $result= mysqli_query($con,$query);
    
  
    if(mysqli_num_rows($result) > 0){

        ?>

        <script type="text/javascript">
        window.location="order-status/status.php";
        </script>
    <?php

    }

else{
    //
}

}
?>



<!doctype html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Premier Automotive | Engineering </title>

    <script src="js/vendor/jquery.js"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="img/img-quo/FAV2.jpg" />
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/46320e93ad.js" crossorigin="anonymous"></script>

</head>

<body>

    <header>

        <div class="main-header large-12 columns no-padding">

            <div class="global-page-container">

                <div class="logo small-6 small-offset-3 large-3 large-offset-0 columns no-padding">
                    <a href="index.php" title="home">
                        <div class="table">
                            <div class="table-cell">
                                <h1> <span class="square">&nbsp;</span>Premier Automotive & General Engineering</h1>


                            </div>
                        </div>
                    </a>
                </div>

                <div class="main-menu show-for-large-up large-9 columns text-right">
                    <div class="table">
                        <div class="table-cell">
                            <ul class="menu-items">
                                <li><a href="index.php#about-us">About</a></li>
                                <li><a href="index.php#servicos">Services</a></li>
                                <li><a href="index.php#contact-us">Contact</a></li>



                                

                            </ul>

                        </div>
                    </div>
                </div>

                <div id="hamburguer-icon" class="hamburguer-icon small-2 columns text-right">
                    <div class="table">
                        <div class="table-cell">
                            <img src="img/menu/hamburguer.svg">
                        </div>
                    </div>
                </div>

                <div class="right-space small-1 columns"></div>

            </div>
        </div>

        <div id="sliding-header-menu-outer" class="sliding-header-menu-outer">
            <div class="sliding-header-menu">

                <div id="sliding-header-menu-close-button" class="sliding-header-menu-close-button small-12 columns">
                    <div class="table">
                        <div class="table-cell">
                            <img class="close-icon" src="img/menu/close.svg">
                        </div>
                    </div>
                </div>



                <div class="sliding-header-menu-main-menu small-12 columns">

                    <div class="table">
                        <div class="table-cell">
                            <ul class="sliding-header-menu-li">
                                <li><a href="index.php#about-us">About</a></li>
                                <li><a href="index.php#servicos">Services</a></li>
                                <li><a href="index.php#contact-us">Contact</a></li>



                            </ul>

                            


                        </div>
                    </div>

                </div>
            </div>
        </div>

    </header>

    <div class="ghost-element">
    </div>

    <div class="welcome-gallery small-12 columns">



        <div class="photo-section small-12 columns">
            <img class="homepage-main-photo" src="img/myImg/spring.jpg" alt="slider imagem 1">

        </div>

        <div class="main-section-title small-10 columns">
            <div class="table">
                <div class="table-cell">
                    <h1>Premier Automotive And General Engineering</h1>
                    <h2>Best Civil Engineering Works In Town</h2>

<br>

                    <a class="btn btn-secondary" href="forgot.php" 
                        target="popup" 
                        onclick="window.open('order-status/status.php','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
                        Check Order
                        </a>
               
                </div>
                <br>


            
            </div>

        </div>

        <div class="photo-gradient">

        </div>

    </div>

    <div class="about-us small-12 columns no-padding small-centered inline">

        <div class="global-page-container">
            <div id="about-us" class="section-title small-12 columns no-padding">
                <h3>About us</h3>
                <hr>
                </hr>
            </div>

            <div class="tab-box small-12 small-centered large-10 columns no-padding">

                <div class="box-tabs">
                    <div style="background-color: #2A2D34; font-weight: bold" class="single-tab">Mission</div>
                    <div class="single-tab">Vision</div>
                    <div class="single-tab">Values</div>
                </div>

                <div id="box-text">
                    <!--remember to make this is the same in script.js under mission -->
                    Duis ac leo nisi. Mauris nec ex id lorem commodo rutrum rutrum a est. Cras facilisis sit amet lectus
                    non posuere. Nullam non magna non enim blandit elementum.
                </div>

            </div>

        </div>

    </div>

    <div class="servicos inline small-12 columns no-padding small-centered inline">

        <div class="global-page-container">
            <div id="servicos" class="section-title small-12 columns no-padding">
                <h3>Services</h3>
                <hr>
                </hr>
            </div>
        </div>

        <div class="service-stripe small-12 columns no-padding">
            <div class="global-page-container">
                <div class="service-stripe-inner small-12 columns no-padding">

                    <div id="service-previous" class="stripe-arrow small-1 columns no-padding">
                        <p>
                            <
                                </p>
                    </div>

                    <div class="stripe-content small-10 columns no-padding">
                        <span id="service-title">Automotive Engineering</span>
                        <p id="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent finibus
                            tincidunt sem non sodales. Nunc et quam in magna vehicula sollicitudin.
                            Aliquam erat volutpat. Maecenas dolor mi, aliquet ac quam aliquet, condimentum
                            dictum nisi.</p>
                    </div>

                    <div id="service-next" class="stripe-arrow small-1 columns no-padding">
                        <p>></p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <di v class="projetos small-12 large-12 columns no-padding small-centered inline">
        <div class="global-page-container">
            <div class="section-title small-12 columns no-padding">
                <h3>Projects</h3>
                <hr>
                </hr>
            </div>
        </div>

        <div class="global-page-container">


            <div class="slider-projetos">
                <div id="slider-002" class="slider-002 small-12 small-centered columns">

                    <div class="projetos-item-outer bounce-hover small-12 medium-4 columns end">
                        <div class="projetos-item">
                            <a href="index.php">


                                <div class="projetos-item-image">
                                    <img src="img/myImg/projects/welding_1.jpg" alt="camarao" />
                                </div>

                                <div class="item-info">


                                    <div class="title">Welding</div>
                                </div>

                                <div class="gradient-filter">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="projetos-item-outer bounce-hover small-12 medium-4 columns end ">
                        <div class="projetos-item">
                            <a href="index.php">

                                <div class="projetos-item-image">
                                    <img src="img/myImg//projects/suspension_1.jpg" alt="cheesecake" />
                                </div>

                                <div class="item-info">


                                    <div class="title">Suspension Fitting</div>

                                </div>
                                <div class="gradient-filter">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="projetos-item-outer bounce-hover small-12 medium-4 columns end">
                        <div class="projetos-item">
                            <a href="index.php">

                                <div class="projetos-item-image">
                                    <img src="img/myImg//projects/welding.jpg" alt="barbecue" />
                                </div>

                                <div class="item-info">


                                    <div class="title">Lockable First Aid Cages </div>
                                </div>

                                <div class="gradient-filter">
                                </div>

                            </a>
                        </div>
                    </div>

                    <span id="dots"></span>
                    <span id="more">


                        <div class="projetos-item-outer bounce-hover small-12 medium-4 columns end">
                            <div class="projetos-item">
                                <a href="index.php">

                                    <div class="projetos-item-image">
                                        <img src="img/myImg//projects/welding_2.jpg" alt="cheesecake" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title">Cashier Security</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>

                        <div class="projetos-item-outer bounce-hover small-12 medium-4 columns end">
                            <div class="projetos-item">
                                <a href="index.php">

                                    <div class="projetos-item-image">
                                        <img src="img/myImg//projects/truckextinguishers.jpg" alt="cheesecake" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title">Mounting Fire Extinguishers on Trucks </div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>

                        <div class="projetos-item-outer bounce-hover small-12 medium-4 columns end">
                            <div class="projetos-item">
                                <a href="index.php">

                                    <div class="projetos-item-image">
                                        <img src="img/myImg//projects/truckfix_1.jpg" alt="cheesecake" />
                                    </div>

                                    <div class="item-info">


                                        <div class="title">Truck Fix</div>
                                    </div>

                                    <div class="gradient-filter">
                                    </div>

                                </a>
                            </div>
                        </div>


                    </span>
                </div>

            </div>
            <button type="button" id="see-more" onclick="see()"> See Less</button>

        </div>

    </div>

    <div id="contact-us" class="contact-us small-12 columns no-padding inline">

        <div class="global-page-container">
            <div class="section-title small-12 columns no-padding">
                <h3>Contact</h3>
                <hr>
                </hr>
            </div>

            <div class="contact-form small-12 medium-10 large-6 columns no-padding small-centered">

                <form action="https://postmail.invotes.com/send" method="post" id="email_form">

                    <input type="text" name="subject" placeholder="Subject" />
                    <input type="text" name="extra_fullName" placeholder="Full Name" />
                    <input type="text" name="extra_email" placeholder="E-mail Address" />
                    <textarea name="text" placeholder="Message"></textarea>
                    <input type="hidden" name="access_token" value="adn28cie84bz14qdjq6st76d" />
                    <!-- return urls can be fully qualified -OR-
                            start with / for root relative -OR-
                            start with . for url relative -->
                    <input type="hidden" name="success_url" value="koketsomorapedi.site" />
                    <!-- use front page of website after publication or any redirect address -->
                    <input type="hidden" name="error_url" value="https://www.google.com" />
                    <!-- work on error message upon receipt of error or redirect address page -->

                    <input id="submit_form" type="submit" value="Send" />

                </form>

            </div>

        </div>
    </div>


    <footer id="footer" class="small-12 columns no-padding">

        <div class="global-page-container">

            <div class="small-11 small-centered medium-10 medium-offset-1 columns footer-section inline">

                <div class="follow-us small-5 medium-4 small-offset-1 medium-offset-0 columns">
                    <h4 class="footer-section-title">Follow us</h4>
                    <a href="http://www.facebook.com"><i class="fab fa-facebook"></i></a>
                    <a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a>
                </div>

                <div class="contato small-5 medium-4 small-offset-1 medium-offset-0 columns">
                    <h4 class="footer-section-title">Location</h4>
                    <p>
                        Gaborone, Botswana<br>
                        Mokolowane Rd.
                        Broadhurst Industrial<br>
                        <a href="mailto:kingsley@it.bw">Email: kingsley@it.bw</a><br>
                        <a href="fax:+2673182081">Fax: 3182081</a><br>
                        <a href="tel:+2673182080">Tel: 3182080</a>
                    </p>
                </div>

                <div class="horario small-5 medium-4 small-offset-1 medium-offset-0 columns">
                    <h4 class="footer-section-title">Opening times</h4>
                    <p>
                        Mon-Fri: 07300hrs - 1630hrs<br>
                        Saturday: 08000hrs - 1500hrs<br>
                        Sunday: 0900hrs - 1300hrs</p>
                </div>

                <hr>
                </hr>

                <div class="copyright small-12 columns">

                    <span id="current_year"></span> &copy; Code Brewers

                </div>
            </div>

        </div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/vendor/foundation.min.js"></script>


    <script>
        $(document).foundation();
    </script>

</body>

</html>