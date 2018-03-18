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
                        <a href="#">Participe ICO</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Register</h2>
                        <div class="line-shape"></div>
                    </div>

                </div>
                <div class="col-md-12">
                    <!-- Form Start-->
                    <form action="<?php echo site_url().'register/crear_registro';?>" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><input type="checkbox" id="american" name="american" value="1" required>&nbsp;&nbsp;Check here to confirm that you are NOT a U.S. citizen, resident or entity (each a “U.S. Person”) nor are you purchasing EWG Tokens or signing on behalf of a U.S. Person.</label>
                                        </div>
                                        <div class="form-group">
                                            <label><input type="checkbox" id="american" name="american" value="1" required>&nbsp;&nbsp;Check here to indicate that you have read etherwhitegold.io <b>Whitepaper</b></label>
                                        </div>
                                        <div class="form-group">
                                            <label><input type="checkbox" id="american" name="american" value="1" required>&nbsp;&nbsp;Check here to confirm that you have read and understood Etherwhitegold Ico WhitePaper, and agreed to the <b>Terms and Conditions and Privacy Policy</b></label>
                                        </div>
                                        <div class="form-group">
                                            <label><input type="checkbox" id="american" name="american" value="1" required>&nbsp;&nbsp;Check here to confirm that you have read, understand and agree to the <b>Term of Use</b></label>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input onblur="validate_username(this.value);" type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                                            <span class="alert-0"></span>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ether" id="ether" placeholder="Ethereum Address" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Send!</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                </div>
            </div>
        </div>
    </section>
    <script>
    function validate_username(username){
        $.ajax({
        type: "post",
        url: site + "register/validate_username",
        dataType: "json",
        data: {username: username},
        success:function(data){            
            if(data.message == "true"){         
                $(".alert-0").removeClass('text-success').addClass('text-danger').html(data.print);
            }else{
                $(".alert-0").removeClass('text-danger').addClass('text-success').html(data.print);
            }
        }            
        });
    }
    </script>
    <!-- ***** Contact Us Area End ***** -->
    <!-- ***** Footer Area Start ***** -->
   <?php $this->load->view("footer")?>
    <!-- ***** Footer Area Start ***** -->
</body>

</html>
