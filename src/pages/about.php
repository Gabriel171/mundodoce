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
                            <h2>Sobre nossa Empresa</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Sobre</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 
        ================================================== 
            Company Description Section Start
        ================================================== -->
        <section class="company-description">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                        <img src="images/about/about-company.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Empresa Mundo Doce</h3>
                            <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                                O Mundo dos Doces tem o compromisso com a privacidade e a segurança de seus clientes durante todo o processo de navegação e compra pelo site. Os dados cadastrais dos clientes não são vendidos, trocados ou divulgados para terceiros, exceto quando essas informações são necessárias para o processo de entrega, para cobrança, ou para participação em promoções solicitadas pelos clientes. Visamos ser a maior e melhor empresa na distribuição de produtos de um sabor inigualável, fazendo a diferença e conquistando o paladar dos consumidores. Desenvolvendo, disponibilizando e aplicando modernos e pioneiros processos na área dos doces com o objetivo de oferecer os melhores produtos, com a melhor qualidade, visando satisfazer as necessidades e expectativas de nossos clientes, contribuindo para o constante aperfeiçoamento e crescimento do nosso mercado nacional.


                            </p>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 
        ================================================== 
            Company Feature Section Start
        ================================================== -->
        <section class="about-feature clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                        <h2>
                        Missão
                        </h2>
                        <p>
                            Oferecer cultura de diferentes países através de doces, para um público que gosta de experimentar novos sabores.
                        </p>
                    </div>
                    <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        <h2 class="item_title">
                        Visão
                        </h2>
                        <p>
                            Ser uma doceria diferenciada em São José dos Campos, sendo referência em doces, através da qualidade e sofisticação. Buscando expandir seus sabores por
                            todo Vale do Paraíba.
                        </p>
                    </div>
                    <div class="block about-feature-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
                        <h2 class="item_title">
                        Valores
                        </h2>
                        <p>
                           -Bom Relacionamento com clientes e funcionários.
                           -Respeito a todos (Funcionários, Clientes, Fornecedores).
                           -Integridade e honestidade a todos(Funcionários, Clientes, Fornecedores).
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 
        ================================================== 
            Team Section Start
        ================================================== -->
        <section id="team">
            <div class="container">
                <div class="row">
                    <h2 class="subtitle text-center">Nosso Time</h2>
                    
                    <div class="col-md-3">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                            <div class="team-img">
                                <img src="images/team/team-2.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Helen Christine</h3>
                            <p class="team_designation">Dona/Sócia</p>
                            
                            <p class="social-icons">
                                <a href="https://www.facebook.com/helen.neves.921" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
    
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                            <div class="team-img">
                                <img src="images/team/team-3.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Felipe Bittencourt</h3>
                            <p class="team_designation">Dono/Sócio</p>
                            <p class="social-icons">
                                <a href="https://www.facebook.com/felipe.bittencourt.3511" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                                
                            </p>
                        </div>
                    </div>
                    
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