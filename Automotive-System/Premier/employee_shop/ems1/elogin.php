<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Premier Automotive | Engineering </title>

    <script src="js/vendor/jquery.js"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="img/img-quo/FAV2.jpg" />
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style-login.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/46320e93ad.js" crossorigin="anonymous"></script>

</head>

<body>

    <header>

        <div class="main-header large-12 columns no-padding">

            <div class="global-page-container">

                <div class="logo small-6 small-offset-3 large-3 large-offset-0 columns no-padding">
                <a href="../index.php" title="home">
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

                            </ul>

                        </div>
                    </div>
                </div>


                <div class="right-space small-1 columns"></div>

            </div>
        </div>


    </header>
    <br><br><br><br><br>




    <div class="container">
        <div id="login_head">

            <div class="col-lg-8 col-md-12">

                <div id="login">

                    <form role="form" action="process/eprocess.php" method="POST">

                        <div class="login-wrap">

                            <div class="row">

                                <div class="col-lg-12">

                                    <h1 class="display-6 text-info">Employee Shop </h1>
                                </div>
                            </div>

                            <p class="tips col-lg-12"> </p>

                            <div class="row hidden-xs">

                                <div class="col-sm-4 col-lg-4">

                                    <label class="text-info" for="email">
                                        Email
                                    </label>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <label class="text-info" for="password">
                                        Password
                                    </label>
                                </div>

                                <div class="col-sm-2 col-lg-2">

                                </div>
                            </div>
                            <div class="row">

                                <div class="input-field col-sm-4 col-lg-4">
                                    <div class="form-group">
                                        <input id="email" name="mailuid" type="text" class="validate form-control" placeholder="Your email" required="">
                                    </div>
                                </div>
                                <div class="input-field col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input id="password" type="password" name="pwd" class="validate form-control" placeholder="Password" required="">
                                    </div>
                                </div>

                                <div class="input-field col-sm-2 col-lg-2">

                                    <input type="submit" class="btn btn-outline-info rounded" id="loginButton" name="login-submit" value="Login">
                                </div>
                            </div>


                        </div>

                        <br>

                        <a class="text-info" href="forgot.php" target="popup" onclick="window.open('forgot.php','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
                            Forgot Password?
                        </a>

                        </br>

                        <a class="text-warning" href="alogin.php" target="_blank">
                            Are you an Admin?
                        </a>

                    </form>
                </div>


            </div>

        </div>
    </div>
    <br><br>


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


    <script src="js/vendor/jquery.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <script>
        $(document).foundation();
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->

</body>

</html>