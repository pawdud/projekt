<?php require_once 'header.php'; ?>
<section class="container">
    <style>
        .department
        {
            font-size: 20px;
            color: #07E2EA;
            display: block;
            padding-bottom: 20px;
            padding-top: 31px;
        }

        #send_mail
        {
            background-color: #07E2EA;
            color: white;
            font-size: 19px;
            width: 100px;
            height: 40px;
            border: none;
            margin-top: 18px;
            text-align: center;
        }

    </style>


    <div class="wrapper">
        <h2 class="title">Kontakt</h2>  
        <img style="width: 100%; margin-top: 30px;" src="http://maps.googleapis.com/maps/api/staticmap?center=49.620,20.699&zoom=12&size=640x210&sensor=false">
        <div>
            <div id="contact-cnt-address">
                <h3 class="title">DANE TELEADRESOWE</h3>

                <h4 style="padding-bottom: 2px; font-size: 22px; color: #969696">Tomek Ruchała<br />
                    ProjektowanieStronSacz.pl</h4>

                <span class="department">Sprzedaż</span>
                <ul>
                    <li class="contact-phone" >
                        <a class="email"  href="javascript:void(0);">+48 790 247 094</a>

                    </li>            
                    <li class="contact-email" style="margin-top: 10px;" >
                        <a class="email"  href="javascript:void(0);">info@projektowaniestronsacz.pl</a>
                    </li>            
                </ul>
                <span class="department">Sprawy techniczne</span>
                <ul>
                    <li class="contact-phone" >
                        <a class="email"  href="javascript:void(0);">+48 792 286 461</a>

                    </li>            
                    <li class="contact-email" style="margin-top: 10px;">
                        <a class="email"  href="javascript:void(0);">serwis@projektowaniestronsacz.pl</a>
                    </li>            
                </ul>

                <span class="department">Godziny pracy:</span>
                <ul>
                    <li class="contact-phone" >
                        <a class="email"  href="javascript:void(0);">od poniedziałku do piątku
                            <br />
                            od 8:00 do 16:00
                        </a>

                    </li>            

                </ul>

                <br class="clear"/>
            </div>

            <div id="contact-cnt-form">
                <h3 class="title">FORMULARZ KONTAKTOWY</h3>
                <form id="form-contact" action="/send_mail.php">


                    <input type="text" name="mail[name]"  placeholder="Imię i Nazwisko">


                    <input type="text" name="mail[email]" placeholder="E-mail">


                    <input type="text" name="mail[phone]"  placeholder="Telefon">

                    <input type="text" name="mail[subject]" style="margin-left: 15px;
                           float: none;
                           left: -15px;
                           position: relative;
                           margin-top: 8px;
                           width: 475px;"  placeholder="Temat wiadomości">


                    <textarea name="mail[message]" placeholder="Wpisz wiadomość"></textarea>                        
                    <br />
                    <input type="text" name="mail[budget]" 
                           style="margin-left: 15px;
                           float: none;
                           left: -15px;
                           position: relative;
                           margin-top: 8px;
                           width: 475px;" placeholder="Jaki budżet?">
                    <br />
                    <input id="send_mail" type="submint" name="mail[submit]" value="WYŚLIJ" />

                </form>
                <br class="clear"/>
            </div>
            <br class="clear" />
        </div>


        <br class="clear" />


    </div>
</section>

<script>
    jQuery(function($) {
        $('#send_mail').click(function(e) {
            e.preventDefault();
            var form = $("#form-contact");

//            var url = '/pawel/firma/' + form.attr('action');
            var url = form.attr('action');
            var formData = form.serialize();

            $.post(url, formData, function(data) {
                var newHtml = data.response;
                $('#contact-cnt-form').children().remove();
                $('#contact-cnt-form').append(newHtml);
            });
        });
    });
</script>

<?php require_once 'footer.php'; ?>