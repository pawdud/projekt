<footer>
    
    <style>
        .nav_footer {
            width: auto;
            vertical-align: central;
        }
        
        .nav_footer li {
            width: 120px;
            float: left;
        }
    </style>
    
    <div class="wrapper">  

        <div class="col">
            <h3>ProjektowanieStronSacz.pl</h3>
            <p>                       
                Powierzasz swój projekt grupie 
                profesjonalistów i pasjonatów internetu dlatego masz pewność że
                zostanie wykonany według najnowszych trendów i przed oddaniem zostanie dokładnie przetestowany.
            </p>                    
        </div>

        <div class="col contact">
            <span style="display: inline-block;" class="contact">
                <a class="email" href="javascript:void(0);">ProjektowanieStronSacz.pl</a>
                <br />
                <a class="phone" href="javascript:void(0);">790 247 094</a>
                <br />
                <a class="phone" href="javascript:void(0);">792 286 461</a>  
                <br />
                <a class="email" href="javascript:void(0);">info@projektowaniestronsacz.pl</a>
                <br />
                <a class="email" href="javascript:void(0);">www.projektowaniestronsacz.pl</a>
            </span>
        </div>     

        <div class="col social">
            <span style="width: 156px;">
                <a href="javascript:void(0)">
                    <img src="design/img/icons/fb.png">
                </a>
                <a href="javascript:void(0)">
                    <img src="design/img/icons/googleplus.png">
                </a>
                <a href="javascript:void(0)">
                    <img src="design/img/icons/twitter.png">
                </a>
                <a href="javascript:void(0)">
                    <img src="design/img/icons/rss.png">
                </a> 
            </span>
        </div>

        <br class="clear">

        <div class="nav_footer">
            <center>
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
            </center>
        </div>
        <div id="copy-rights" style="text-align: center; clear: both;">&copy; ProjektowanieStronSacz.pl Wszelkie prawa zastrzeżone</div>                
    </div>
</footer>       
</body>
</html>