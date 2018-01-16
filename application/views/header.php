<div class="eltdf-top-bar">
        <div class="eltdf-grid">
          <div class="eltdf-vertical-align-containers">
            <div class="eltdf-position-left">
              <div class="eltdf-position-left-inner">
                <div id="text-3" class="widget widget_text eltdf-top-bar-widget">
                  <div class="textwidget">
                    <p>
                      <?php echo replace_vocales_voculeshtml("Teléfono: ");?>
                        <a href="tel:+51 01 2479387"> +51 01 2479387</a>&nbsp; &nbsp; &nbsp;
                      <?php echo replace_vocales_voculeshtml("Síguenos: ");?>
                    </p>
                  </div>
                </div>
                  <!--SOCIAL LINK-->
                  <a class="eltdf-social-icon-widget-holder eltdf-icon-has-hover" data-hover-color="#04d2c8" style="color: #606264;;font-size: 12px;margin: 1px 0px 0px 4px;" href="http://www.facebook.com" target="_blank"> 
                    <i class="fa fa-facebook-square" aria-hidden="true"></i> </a>
                <a class="eltdf-social-icon-widget-holder eltdf-icon-has-hover" data-hover-color="#04d2c8" style="color: #606264;;font-size: 12px;margin: 2px 7px 0 7px;" href="http://www.twitter.com" target="_blank"> 
                    <i class="fa fa-youtube" aria-hidden="true"></i> </a>
                <a class="eltdf-social-icon-widget-holder eltdf-icon-has-hover" data-hover-color="#04d2c8" style="color: #606264;;font-size: 12px;margin: 2px 8px 0px;" href="http://www.instagram.com" target="_blank"> 
                    <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                <!--END SOCIAL LINK-->
              </div>
            </div>
            <!--POSITION RIGHT-->
            <div class="eltdf-position-right">
              <div class="eltdf-position-right-inner">
                <div class="widget eltdf-login-register-widget eltdf-user-not-logged-in"> <a href="#" class="eltdf-modal-opener" style="position: relative;display: inline-block;vertical-align: top;overflow: hidden;padding: 0 20px;min-width: 86px;text-align: center;line-height: 29px;color: #fff;background-color: #04d2c8;border-radius: 30px;z-index: 1;"
                    data-modal="login"><i class="fa fa-user" aria-hidden="true"></i> Login</a> <a href="#" class="eltdf-modal-opener" style="position: relative;display: inline-block;vertical-align: top;overflow: hidden;padding: 0 20px;min-width: 86px;text-align: center;line-height: 29px;color: #fff;background-color: #04d2c8;border-radius: 30px;z-index: 1;"
                    data-modal="register"><i class="fa fa-registered" aria-hidden="true"></i> Register</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<header class="eltdf-page-header">
    <div class="eltdf-menu-area eltdf-menu-right">
	<div class="eltdf-grid">
            <div class="eltdf-vertical-align-containers">
		<div class="eltdf-position-left">
                    <div class="eltdf-position-left-inner">
                        <div class="">
                            <a itemprop="url" href="<?php echo site_url();?>" style="height: 115px;">
                                <img itemprop="image" class="" src="<?php echo site_url().'static/page_front/images/logo/logo_empire_black.png';?>" width="115"  alt="logo"/>
                            </a>
                        </div>
                    </div>
		</div>
		<div class="eltdf-position-right">
                    <div class="eltdf-position-right-inner">
                        <!--START NAV-->									
                            <?php $this->load->view("nav");?>
                        <!--END NAV-->
                    </div>
		</div>
            </div>
	</div>
    </div>
</header>
