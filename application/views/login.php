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
                        <?php $this->load->view("nav_2");?>
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
    <section class="our-monthly-membership section_padding_50 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                </div>
            </div>
        </div>
    </section>
    
<!--    <section class="wellcome_area clearfix">
    </section>-->
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Login</h2>
                        <div class="line-shape"></div>
                    </div>

                </div>
                <div class="col-md-12">
                    <!-- Form Start-->
                    <form action="<?php echo site_url().'login/validar_customer'?>" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="username" id="name" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Go!</button>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                            <p><a href="<?php echo site_url().'forgot';?>">Forgot your password</a></p>
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
