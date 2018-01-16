<!--START LOGIN-->
<div class="eltdf-login-holder eltdf-modal-holder" data-modal="login">
    <div class="eltdf-login-content eltdf-modal-content">
      <div class="eltdf-login-content-inner eltdf-modal-content-inner">
        <h3>User Login</h3>
        <div class="eltdf-wp-login-holder">
          <div class="eltdf-wp-login-holder">
            <div class="eltdf-social-login-holder">
              <div class="eltdf-social-login-holder-outer">
                <div class="eltdf-social-login-holder-inner">
                  <form method="post" class="eltdf-login-form">
                    <fieldset>
                      <div> <label class="eltdf-username-label">Username*</label> <input type="text" name="user_login_name" id="user_login_name" value="" required
                          pattern=".{3,}" title="Three or more characters" /> </div>
                      <div> <label class="eltdf-password-label">Password*</label> <input type="password" name="user_login_password" id="user_login_password"
                          value="" required/> </div>
                      <div class="eltdf-lost-pass-remember-holder clearfix">
                        <div class="eltdf-remember-holder"> <span class="eltdf-login-remember"> <input name="rememberme" value="forever" id="rememberme" type="checkbox"/> <label for="rememberme" class="eltdf-checbox-label">Remember me</label> </span>                          </div>
                        <div class="eltdf-lost-pass-holder"> <a href="#" class="eltdf-modal-opener" data-modal="password">Lost your password?</a> </div>
                      </div> <input type="hidden" name="redirect" id="redirect" value="">
                      <div class="eltdf-login-button-holder"> <button type="submit" class="eltdf-btn eltdf-btn-large eltdf-btn-solid eltdf-btn-default eltdf-hover-animation"> <span class="eltdf-btn-text">Login</span> <span class="eltdf-btn-hover-item"></span> </button>                        <input type="hidden" id="eltdf-login-security" name="eltdf-login-security" value="eced90d513" /><input type="hidden" name="_wp_http_referer"
                          value="/" /> 
                      </div>
                      <div class="eltdf-register-link-holder"> <span class="eltdf-register-label"> Not a member yet? </span> <a href="#" class="eltdf-modal-opener" data-modal="register">Register Now</a>                        </div>
                    </fieldset>
                  </form>
                </div>
              </div>
              <div class="eltdf-membership-response-holder clearfix"></div>
              <script type="text/template" class="eltdf-membership-response-template">
                <div class="eltdf-membership-response <%= messageClass %> ">
                  <div class="eltdf-membership-response-message">
                    <p>
                      <%=message %>
                    </p>
                  </div>
                </div>
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--START REGISTER-->
<div class="eltdf-register-holder eltdf-modal-holder" data-modal="register">
    <div class="eltdf-register-content eltdf-modal-content">
      <div class="eltdf-register-content-inner eltdf-modal-content-inner" id="eltdf-register-content"> 
        <h3>User Registration</h3>
        <div class="eltdf-wp-register-holder">
          <div class="eltdf-social-register-holder">
            <form method="post" class="eltdf-register-form">
              <fieldset>
                <div><label class="eltdf-username-label">User Name</label><input type="text" name="user_register_name" id="user_register_name" value="" required
                    pattern=".{3,}" title="Three or more characters" /></div>
                <div><label class="eltdf-username-label">Email</label><input type="email" name="user_register_email" id="user_register_email" value="" required
                  /></div>
                <div> <label class="eltdf-username-label">Password</label> <input type="password" name="user_register_password" id="user_register_password" value=""
                    required /> </div>
                <div> <label class="eltdf-username-label">Repeat Password</label> <input type="password" name="user_register_confirm_password" id="user_register_confirm_password"
                    value="" required /> </div>
                <div class="eltdf-register-button-holder"><button type="submit" class="eltdf-btn eltdf-btn-large eltdf-btn-solid eltdf-btn-light eltdf-hover-animation"> <span class="eltdf-btn-text">REGISTER</span> <span class="eltdf-btn-hover-item"></span> </button><input
                    type="hidden" id="eltdf-register-security" name="eltdf-register-security" value="c2927019de" /><input type="hidden" name="_wp_http_referer"
                    value="/" /></div>
              </fieldset>
            </form>
            <div class="eltdf-membership-response-holder clearfix"></div>
            <script type="text/template" class="eltdf-membership-response-template">
              <div class="eltdf-membership-response <%= messageClass %> ">
                <div class="eltdf-membership-response-message">
                  <p>
                    <%=message %>
                  </p>
                </div>
              </div>
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--START RESET PASSWORD-->
<div class="eltdf-password-holder eltdf-modal-holder" data-modal="password">
    <div class="eltdf-password-content eltdf-modal-content">
      <div class="eltdf-reset-pass-content-inner eltdf-modal-content-inner" id="eltdf-reset-pass-content"> <span class="eltdf-wp-login-icon lnr lnr-lock"></span>
        <h3>Reset Password</h3>
        <div class="eltdf-wp-reset-pass-holder">
          <div class="eltdf-social-reset-password-holder">
            <form action="http://esmarts.elated-themes.com/wp-login.php?action=lostpassword" method="post" id="eltdf-lost-password-form" class="eltdf-reset-pass-form">
              <div><input type="text" name="user_reset_password_login" class="eltdf-input-field" id="user_reset_password_login" placeholder="Enter username or email"
                  value="" size="20" required></div>
              <div class="eltdf-reset-password-button-holder"><button type="submit" class="eltdf-btn eltdf-btn-large eltdf-btn-solid eltdf-btn-default eltdf-hover-animation"> <span class="eltdf-btn-text">NEW PASSWORD</span> <span class="eltdf-btn-hover-item"></span> </button></div>
            </form>
            <div class="eltdf-membership-response-holder clearfix"></div>
            <script type="text/template" class="eltdf-membership-response-template">
              <div class="eltdf-membership-response <%= messageClass %> ">
                <div class="eltdf-membership-response-message">
                  <p>
                    <%=message %>
                  </p>
                </div>
              </div>
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>