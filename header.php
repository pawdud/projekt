<?php require_once 'includes.php'; ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="design/css/reset.css" type="text/css" rel="stylesheet">  
        <link href="design/css/style.css" type="text/css" rel="stylesheet">  
        <link href="design/css/jquery-ui.css" type="text/css" rel="stylesheet">
        <script src="design/js/prefixfree.min.js"></script>
        <script src="design/js/jquery.min.js"></script>
        <script src="design/js/jquery.slides.min.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
       <!--<link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>-->
       <!--<link href='http://fonts.googleapis.com/css?family=Englebert:400,700' rel='stylesheet' type='text/css'>-->
    </head>
    <body>    
        <header>
            <div class="wrapper">
                <h1 id="logo"><img src="design/img/logo.png" /></h1>   

                <div id="menu-mobile">
                    MENU
                </div>

                <nav>
                    <ul>
                        <li>
                            <a href="./"                class="home       <?= menu_active(''); ?>" >Home</a>
                        </li>
                        <li>
                            <a href="o-nas.html"        class="about      <?= menu_active('about'); ?>">O nas</a>
                        </li>
                        <li>
                            <a href="oferta.html"       class="offer       <?= menu_active('offer'); ?>">Oferta</a>
                        </li>
                        <li>
                            <a href="portfolio.html"    class="portfolio   <?= menu_active('portfolio'); ?>">Portfolio</a>
                        </li>
                        <li>
                            <a href="cennik.html"       class="price       <?= menu_active('pricelist'); ?>">Cennik</a>
                        </li>
                        <li>
                            <a href="kontakt.html"      class="contact     <?= menu_active('contact'); ?>">Kontakt</a>
                        </li>
                    </ul>
                </nav>
                <br class="clear" />
            </div>
        </header>
