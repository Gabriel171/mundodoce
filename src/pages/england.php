<!DOCTYPE html>
<html class="no-js">
    <?php
        $path = "/templates/header.php";
        include_once(dirname(__DIR__) . $path);
    ?>
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
                            <h2>Inglaterra</h2>
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
                        <div class="col-md-8">
                                <div class="blog-post-image">
                                    <a href="post-fullwidth.html"><img class="img-responsive" src="images/blog/Scones1.jpg" alt="" /></a>
                                </div>
                                <div class="blog-content">
                                    <h2 class="blogpost-title">
                                    <a href="post-fullwidth.html">Scones</a>
                                    </h2>
                                    
                                    <p>Inglaterra
                                    </p>
                                </div>
                                
                            </article>
                                <div class="blog-post-image">
                                    <a href="post-fullwidth.html"><img class="img-responsive" src="images/blog/summer1.jpg" alt="" /></a>
                                </div>
                                <div class="blog-content">
                                    <h2 class="blogpost-title">
                                    <a href="post-fullwidth.html">Summer Pudding</a>
                                    </h2>
                                    
                                    <p>Inglaterra
                                    </p>
                                </div>
                                
                            </article>
                            <article class="wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">
                                <div class="blog-post-image">
                                    <a href="post-fullwidth.html"><img class="img-responsive" src="images/blog/trifle1.jpg" alt="" /></a>
                                </div>
                                <div class="blog-content">
                                    <h2 class="blogpost-title">
                                    <a href="post-fullwidth.html">Trifle</a>
                                    </h2>
                                    
                                    <p>Inglaterra
                                    </p>
                                </div>
                                
                            </article>
                        </div>
                        <div class="col-md-4">
                            <div class="sidebar">
                               
                            </div>
                        </div>
                    </section>
                    <!--
                    ==================================================
                    Call To Action Section Start
                    ================================================== -->
                    <section id="call-to-action">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block">
                                        
                                        <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="300ms">ENTRE EM CONTATO CONOSCO</a>
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