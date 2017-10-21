<!DOCTYPE html>
<html class="no-js">
<head>
    <?php
        $path = "/templates/header.php";
        include(dirname(__DIR__) . $path);
    ?>
</head>
<body>
    <?php
        $path = "/templates/menu.php";
        include(dirname(__DIR__) . $path);
    ?>
    <!--
    ==================================================
    Slider Section Start
    ================================================== -->
    <section id="hero-area" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="block wow fadeInUp" data-wow-delay=".3s">
                        
                        <!-- Slider -->
                        <section class="cd-intro">
                            <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                            <background src="src/images/DoceMundo.jpg" class="img-responsive" >
                            <span>Olá, somos a Empresa</span><br>
                            <span class="cd-words-wrapper">
                                <b class="is-visible">Mundo Doce</b>
                            </span>
                            </h1>
                            </section> <!-- cd-intro -->
                            <!-- /.slider -->
                            <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                            </h2>
                            <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="#works" >Nossos Doces</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#main-slider-->
        <!--
        ==================================================
        Slider Section Start
        ================================================== -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                            <h2>
                            Sobre nós
                            </h2>
                            <p>
                                Olá, somos especialistas em doces do mundo inteiro, aqui irá encontrar doces de outros países, por exemplo na França, Itália, Ingaterra 
                                e entres outros.
                            </p>
                            <p>
                                Não fazemos venda online, você pode vim retirar em nossa loja com a localização que esta em contato
                            </p>
                        </div>
                        
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                            <img src="images/about/about.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- /#about -->
        <!--
        ==================================================
        Portfolio Section Start
        ================================================== -->
        <section id="works" class="works">
            <div class="container">
                <div class="section-heading">
                    <h1 class="title wow fadeInDown" data-wow-delay=".3s">Um pouco do nosso trabalho</h1>
                    <p class="wow fadeInDown" data-wow-delay=".5s">
                        Aqui estão alguns doces que vamos fazer de alguns países.
                    </p>
                </div>
                <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item1.jpg" class="img-responsive" alt="this is a title" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item1.jpg"></a>
                                        <a target="_blank" href="single-portfolio.html"></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                            <h4>
                            <a href="#">
                                Paris Brest
                            </a>
                            </h4>
                            <p>
                                França
                            </p>
                            </figcaption>
                        </figure>
                    </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item2.jpg" class="img-responsive" alt="this is a title" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item2.jpg"></a>
                                        <a target="_blank" href="single-portfolio.html"></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                            <h4>
                            <a href="#">
                                Macaron
                            </a>
                            </h4>
                            <p>
                                França
                            </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item3.jpg" class="img-responsive" alt="" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item3.jpg"></a>
                                        <a target="_blank" href="single-portfolio.html"></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                            <h4>
                            <a href="#">
                                Eclair
                            </a>
                            </h4>
                            <p>
                                França
                            </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item4.jpg" class="img-responsive" alt="" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item4.jpg"></a>
                                        <a target="_blank" href="single-portfolio.html"></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                            <h4>
                            <a href="#">
                                Panna Cotta
                            </a>
                            </h4>
                            <p>
                                Itália
                            </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item5.jpg" class="img-responsive" alt="" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item5.jpg"></a>
                                        <a target="_blank" href="single-portfolio.html"></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                            <h4>
                            <a href="#">
                                Tiramisu
                            </a>
                            </h4>
                            <p>
                                Itália
                            </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item6.jpg" class="img-responsive" alt="" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item6.jpg"></a>
                                        <a target="_blank" href="single-portfolio.html"></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption>
                            <h4>
                            <a href="#">
                                Maritozzo con la panna
                            </a>
                            </h4>
                            <p>
                                Itália
                            </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section> <!-- #works -->
        <!--
        ==================================================
        Portfolio Section Start
        ================================================== -->
<!-- /#feature -->
                        
        <!--
        ==================================================
        Call To Action Section Start
        ================================================== -->
        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            
                            <a href="contact" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">ENTRE EM CONTATO CONOSCO</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <?php
            $path = "/templates/footer.php";
            include_once(dirname(__DIR__) . $path);
        ?>
    </body>
</html>