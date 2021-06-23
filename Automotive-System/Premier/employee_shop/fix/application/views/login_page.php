<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>
        <?= $impostazioni[0]['titolo']; ?> -
        <?= $this->lang->line('login_title'); ?>
    </title>


    <script src="<?= site_url('js/jquery.js'); ?>"></script>
    <link href="<?= site_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('css/hover.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('css/bootstrap-reset.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('css/style.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />

    <script src="js-login/vendor/jquery.js"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="img-login/img-quo/FAV2.jpg" />
    <link rel="stylesheet" href="css-login/foundation.css" />
    <link rel="stylesheet" href="css-login/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/46320e93ad.js" crossorigin="anonymous"></script>



</head>

<?php
$colore = $impostazioni[0]['colore_prim'];
echo '<style id="colori">';
$alfa = $this->Impostazioni_model->hex2rgba($impostazioni[0]['colore_prim'], 0.8);
include 'js/colori_js.php';
echo '</style>';
?>
<script>
jQuery(document).ready(function() {
    $("#black").fadeOut(500);
});
</script>

<body>

    <header>

        <div class="main-header large-12 columns no-padding">

            <div class="global-page-container">

                <div class="logo small-6 small-offset-3 large-3 large-offset-0 columns no-padding">
                <a href="../../../Premier/employee_shop/index.php" title="home">
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

                            </ul>




                        </div>
                    </div>

                </div>
            </div>
        </div>

    </header>

    <script type="text/javascript">
    window.base_url = "<?= site_url(); ?>";
    </script>
    <script type="text/javascript" src="<?= site_url('home/js/login'); ?>"></script>
    <script type="text/javascript" src="<?= site_url('home/js/status'); ?>"></script>
    <script type="text/javascript" src="<?= site_url('home/js/validate'); ?>"></script>

    <br><br><br><br><br><br>

    <div class="container">
        <div id="login_head">
            <div class="col-lg-2 col-md-12 logo_div">
                <img
                    src="<?= ($impostazioni[0]['logo'] == 'default') ? site_url('img') . '/logo_nav.png' : site_url('img') . '/' . $impostazioni[0]['logo']; ?>">
            </div>
            <div class="col-lg-8 col-md-12">
                <div id="login">
                    <form role="form">
                        <div class="login-wrap">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="display-6 text-info"> <?= $this->lang->line('effettua_accesso'); ?></h1>
                                </div>
                            </div>
                            <p class="tips col-lg-12"></p>
                            <div class="row hidden-xs">

                                <div class="col-sm-4 col-lg-4">

                                    <label class="text-info">
                                        <?= $this->lang->line('user_mail'); ?>
                                    </label>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <label class="text-info">
                                        <?= $this->lang->line('password'); ?>
                                    </label>
                                </div>

                                <div class="col-sm-2 col-lg-2">

                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col-sm-4 col-lg-4">

                                    <div class="form-group">
                                        <input id="email" type="text" class="validate form-control"
                                            placeholder="Your email" required="">
                                    </div>
                                </div>
                                <div class="input-field col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <input id="password" type="password" class="validate form-control"
                                            placeholder="Password" required="">
                                    </div>
                                </div>

                                <div class="input-field col-sm-2 col-lg-2">
                                    <button type="button" class="btn btn-outline-info rounded" id="loginButton">
                                        <?= $this->lang->line('accedi'); ?>
                                    </button>
                                </div>
                            </div>


                        </div>
                </div>
                <br>

                <a class="text-info" href="forgot.php" target="popup"
                    onclick="window.open('forgot.php','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
                    Forgot Password?
                </a>



                </form>
            </div>


        </div>

    </div>

    <div style="clear: both;"></div>
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
    
    <link rel="stylesheet" href="<?= site_url('assets/css/toastr.min.css'); ?>">
    <script src="<?= site_url('assets/js/toastr.min.js'); ?>"></script>
    <script src="<?= site_url('js/bootstrap.min.js'); ?>"></script>



    <script src="js-login/vendor/jquery.js"></script>
    <script src="js-login/scripts.js"></script>
    <script src="js-login/vendor/foundation.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <script>
    $(document).foundation();
    </script>

</body>

</html>