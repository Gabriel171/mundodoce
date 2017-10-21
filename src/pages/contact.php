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
                            <h2>Contatos</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Contato</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>   
        </section><!--/#page-header-->

        <!-- 
        ================================================== 
            Contact Section Start
        ================================================== -->
        <section id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">ENTRE EM CONTATO CONOSCO</h2>
                            <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                                Mande uma mensagem para nós.
                            </p>
                            <div class="contact-form">
                                <form action="Envia_Formulario1.php" method="Post">

                             <label for="name"></label>

                            <input class="w-input" type="text" id="name" placeholder="NOME" name="nome">
                                 <p>
                            <label for="email"></label>

                            <input class="w-input" placeholder="E-MAIL" type="text"  id="email" name="email" required="required">
                                 <p>
                             <label for="message"></label>

                            <textarea class="w-input message" placeholder="DIGITE SUA MENSAGEM AQUI" id="message" name="mensagem" width="60%" height="70%"></textarea><br>

                            <input class="button medium" type="submit" value="ENVIAR">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="map-area">
                            <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Localização</h2>
                            
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.277552998015!2d90.3678744!3d23.773128800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0ae4adf3cb9%3A0x7f2cf443b764e4a4!2sShishu+Mela!5e0!3m2!1sen!2s!4v1435516022247" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row address-details">
                    <div class="col-md-3">
                        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                            <i class="ion-ios-location-outline"></i>
                            <h5>125 , Kings Street,Melbourne <br>United Kingdom,600562</h5>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                            <i class="ion-ios-email-outline"></i>
                            <p>doceriamundodoce1@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                            <i class="ion-ios-telephone-outline"></i>
                            <p>+55 12 98291-2136</p>
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