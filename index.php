<?php require_once 'header.php'; ?>
<section class="container">
    <div class="opacity-line top" >&nbsp;</div>

    <article id="slider_content1">
        <h3>Potrzebujesz strony www?</h3>
        <p>Stworzymy ją do Ciebie!
            <a href="javascript:void(0)" class="button">Czytaj więcej..</a></p>
    </article>
    <article id="slider_content2">
        <h3>Szukasz jakości?</h3>
        <p>U nas ją znajdziesz!!! 
            <a class="button" href="javascript:void(0)">Mehr lesen</a></p>
    </article>
    <article id="slider_content3">
        <h3>Zaangażowanie w jeden projekt</h3>
        <p>Pracujemy tylko z kilkoma klientami jednocześnie, dzięki czemu cała nasza uwaga skierowana 
            jest na Twój projekt co pozwoli na dostosowanie projektu do Twoich indywidualnych potrzeb.
            Jesteś dla nas bardzo ważny....
            <a class="button" href="javascript:void(0)">Mehr lesen</a></p>
    </article>
    <article  id="slider_content4">
        <h3>Prostota i funkcjonalność</h3>
        <p>Budujemy proste, oszczędne i piękne strony internetowe.Te projekty są opracowane zgodnie 
            z najwyższymi standardami dostępności i użyteczności dzięki czemu design i informacja przekazywana przez stronę
            są zrozumiałe dla wszystkich.
            <a class="button" href="javascript:void(0)">Mehr lesen</a></p>
    </article>
    <article id="slider_content5">
        <h3>Pełna kontrola</h3>
        <p>zawsze bedziesz miał bezpośredni kontakt z twórcami Twojej strony dzięku czemu będziesz miał 
            pewnośc że projekt spełnia twoje potrzeby i cele
            <a class="button" href="javascript:void(0)">Mehr lesen</a></p>
    </article>
    <article id="slider_content6">
        <h3>Serwis posprzedażowy</h3>
        <p>Jesteśmy do Twojej dyspozycji, także po wykonaniu strony internetowej lub innego projektu.
            <a class="button" href="javascript:void(0)">Mehr lesen</a></p>
    </article>

    <div id="slides">
        <img src="design/img/slides/slide-1.jpg">                
        <img src="design/img/slides/slide-1.jpg">                
        <img src="design/img/slides/slide-1.jpg">    
        <img src="design/img/slides/slide-1.jpg">                
        <img src="design/img/slides/slide-1.jpg">                
        <img src="design/img/slides/slide-1.jpg"> 
    </div>

    <div class="opacity-line bottom" >&nbsp;</div>

    <script>
        jQuery(function($) {
            $('#slides').slidesjs({
                navigation: false,
                pagination: false,
                effect: {
                    fade: {
                        speed: 400
                    }
                },
                callback: {
                    start: function(number)
                    {
                        $("#slider_content1,#slider_content2,#slider_content3,#slider_content4,#slider_content5,#slider_content6").fadeOut(500);
                    },
                    complete: function(number)
                    {
                        $("#slider_content" + number).delay(500).fadeIn(1000);
                    }
                },
                play: {
                    active: false,
                    auto: true,
                    interval: 6000,
                    pauseOnHover: false
                }
            });
        });
    </script>
</section>
<?php require_once 'footer.php'; ?>
</div>