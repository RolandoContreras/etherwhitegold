<!DOCTYPE html>
<html lang="en">
<!-- ***** Head Area Start ***** -->
<?php $this->load->view("head");?>
<!-- ***** Head Area End ***** -->
<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <!-- Nav Area Start -->
                        <?php $this->load->view("nav");?>
                        <!-- Nav Area End -->
                    </div>
                </div>
                <!-- Signup btn -->
                <div class="col-12 col-lg-2">
                    <div class="sing-up-button d-none d-lg-block">
                        <a href="<?php echo site_url().'register';?>">Participe ICO</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-4 col-md">
                    <div class="wellcome-heading">
                        <h2>EWG</h2>
                        <p>The cryptocurrency of your luck</p>
                    </div>
                    <div class="get-start-area">
                        <!-- Form Start -->
                        <!--<a class="submit" href="<?php echo site_url().'static/page_front/whitepaper/whitepaper.pdf';?>" download><i class="fa fa-download"></i> WhitePaper <img width="23px" src="<?php echo site_url().'static/page_front/images/language/es.png';?>" alt="Spanish" /></a>-->
                        <a class="submit" href="#"><i class="fa fa-download"></i> WhitePaper <img width="23px" src="<?php echo site_url().'static/page_front/images/language/es.png';?>" alt="Spanish" /></a>
                        <a class="submit" href="#"><i class="fa fa-download"></i> WhitePaper <img width="23px" src="<?php echo site_url().'static/page_front/images/language/en.png';?>" alt="English" /></a>
                        <!-- Form End -->
                    </div>
                </div>
                <div class="col-4 col-md"></div>
                <div class="col-4 col-md-4">
                    <div class="wellcome-heading" style="text-align: right">
                        <h2>Specifications</h2>
                        <p>Name:</p>
                        <h4>Etherwhitegold</h4>
                        <p>Symbol:</p>
                        <h4>EWG</h4>
                        <p>Decimal:</p>
                        <h4>18</h4>
                        <p>Amount:</p>
                        <h4>13,000,000</h4>
                        <p>Contract:</p>
                        <h4>0x4380fe4B02844a4e4afC3e8E51491587c214df55</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2>Why Is It Special</h2>
                        <p>Etherwhitegold will have different characteristics such as:</p>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <i class="fa fa-tachometer" aria-hidden="true"></i>
                        </div>
                        <h4>Virtual Casino</h4>
                        <p>We will have variations of both casinos and sports betting games. By implementing our coins we can make our casino have the ability to be a fair casino for players and much faster when placing bets.</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <i class="fa fa-university" aria-hidden="true"></i>
                        </div>
                        <h4>Wallet</h4>
                        <p>Etherwhitegold will have your exclusive wallet which processes payments in real time and can be purchased at physical casinos and any material that can be used with fraudulent fines.</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </div>
                        <h4>Mobile App</h4>
                        <p>With our mobile application you can play in our virtual casino from wherever you are. It will be a simple and very intuitive application for our user from which you can also withdraw your earnings directly from your wallet.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Special Description Area -->
        <div class="special_description_area mt-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_description_img">
                            <img src="<?php echo site_url().'static/page_front/images/etherwhitegold.jpg';?>" alt="EtherWhiteGold">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto">
                        <div class="special_description_content">
                            <h2>EtherWhiteGold</h2>
                            <p>Etherwhitegold is an er20 token focused on being a currency accessible to the public and easy to use. Its innovative features allow the community to use ETWG as a means of payment in different areas of entertainment such as virtual casinos. The online gaming industry is valued at $ 46 billion, and is expected to grow to $ 56 billion in 2018. In our view, the market for cryptocurrency games is relatively dense and full of people, which is feasible for the growth of this industry. With EtherwhiteGold we will make possible an absolute transparency between the player and the house since the Blockchain technology is quite robust and unalterable avoiding frauds that can be provoked by any of the parties.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->

    <!-- ***** Awesome Features Start ***** -->
    <section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <h2>Awesome Services</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="fa fa-btc" aria-hidden="true"></i>
                        <h5>Tecnología Blockchain</h5>
                        <p>Usamos tecnología de transacción blockchain descentralizada para transacciones seguras y transparentes.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="fa fa-rocket" aria-hidden="true"></i>
                        <h5>Transacciones rápidas</h5>
                        <p>Envíe y reciba pagos en cualquier parte del mundo de forma rápida y sencilla.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="fa fa-certificate" aria-hidden="true"></i>
                        <h5>Recursos limitados</h5>
                        <p>Solo habrá un suministro máximo de 13 millones de monedas. Esto asegurará la escasezde monedas.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="fa fa-user-secret" aria-hidden="true"></i>
                        <h5>Anónimo</h5>
                        <p>El origen de la transacción es completamente anónimo a menos que el propietario quierarevelar su identidad.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature">
                        <i class="fa fa-exchange" aria-hidden="true"></i>
                        <h5>Comercio</h5>
                        <p>Preste liquidez a nuestros casinos online y gane un interés basado en su opción de inversión./ Podrá intercambiar BTC, ETWG y Fiat en nuestro intercambio internoúltima generación que se lanzará en enero de 2018.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Awesome Features End ***** -->

    <!-- ***** Video Area Start ***** -->
    <div class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Video Area Start -->
                    <div class="video-area" style="background-image: url(<?php echo site_url().'static/page_front/images/video.jpg';?>);">
                        <div class="video-play-btn">
                            <a href="https://www.youtube.com/watch?v=9C5Oh5_lcUk" class="video_btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Video Area End ***** -->
    <!-- ***** Our Team Area Start ***** -->
    <section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Our Team</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="https://colorlib.com/etc/ca/img/team-img/team-1.jpg" alt="">
                            <div class="team-hover-effects">
<!--                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Jesús Garcia</h4>
                            <p>Asesoria Programación blockchain</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="https://colorlib.com/etc/ca/img/team-img/team-2.jpg" alt="">
                            <div class="team-hover-effects">
<!--                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Reivy Gimenes</h4>
                            <p>Diseñador Grafico</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="https://colorlib.com/etc/ca/img/team-img/team-3.jpg" alt="">
                            <div class="team-hover-effects">
<!--                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>José Diaz</h4>
                            <p>Fundador</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="<?php echo site_url().'static/page_front/images/team/rolandoc.jpg';?>" alt="Rolando Contreras">
                            <div class="team-hover-effects">
<!--                                <div class="team-social-icon">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>-->
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Rolando Contreras</h4>
                            <p>Programador y Desarrollador</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area End ***** -->

    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Get in touch with us!</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>We will send you information about the cryptocurrency that will change the world</p>
                    </div>
<!--                    <div class="address-text">
                        <p><span>Address:</span> 40 Baria Sreet 133/2 NewYork City, US</p>
                    </div>-->
                    <div class="phone-text">
                        <p><span>Phone:</span> +11-225-888-888-66</p>
                    </div>
                    <div class="email-text">
                        <p><span>Email:</span> info.etherwhitegold.com</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <form action="<?php echo site_url().'contact/send_messages' ?>" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Your Message *" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Send</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area End ***** -->
    <!-- ***** Footer Area Start ***** -->
   <?php $this->load->view("footer")?>
    <!-- ***** Footer Area Start ***** -->
</body>

</html>
