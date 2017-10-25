<!DOCTYPE html>
<html class="no-js">
    <head>
    <?php
        $path = "/templates/header.php";
        include_once(dirname(__DIR__) . $path);
    ?>
    </head>
    <body>
        <?php
            $path = "/templates/menu.php";
            include_once(dirname(__DIR__) . $path);
        ?>
        <!--
        ==================================================
        Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>França</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                               
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            </section><!--/#Page header-->
            <section id="blog-full-width">
                <div class="container">
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
                                <a>
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
                                <a>
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
                                <a>
                                    Eclair
                                </a>
                                </h4>
                                <p>
                                    França
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                               
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".3s" data-wow-duration="300ms">ENTRE EM CONTATO CONOSCO</a>
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
    </html>