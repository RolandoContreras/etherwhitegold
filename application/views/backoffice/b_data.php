<section>
    <div class="section-heading row">
        <div class=" col-lg-9 col-md-8 col-sm-7 col-xs-12">
            <h1 class="title text-uppercase">My Profile</h1>
        </div>
    </div> 
    <!--SPINNER-->
        <div id="spinner"></div>
    <!--END SPINNER-->
    <div class="row ml-custom">
        <div class="col-xs-12">
            <div class="profile-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default panel-form" data-behaviour="container">
                            <div class="panel-heading text-uppercase clearfix">
                                <h3 class="title">Main information</h3>
                            </div>
                            <hr class="style-2"/>
                            <div class="panel-body">         
                    <div data-behaviour="content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-male fa-4x" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <div class="user-name-info"><span><?php echo $obj_customer->username;?></span></div>
                                                <p class="form-control">
                                                    <span><?php echo $obj_customer->first_name." ".$obj_customer->last_name;?></span>
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 border-left">
                                <div class="form-group">
                                    <div class="media">
                                        <div class="media-left"><i class="fa fa-envelope fa-3x"></i></div>
                                        <div class="media-body">
                                            <div class="control-label">E-mail address</div>
                                            <p class="form-control">
                                                <span><?php echo $obj_customer->email;?></span>
                                                <input type="hidden" id="customer_id" name="customer_id" disabled value="<?php echo $obj_customer->customer_id;?>">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default panel-form" data-behaviour="container">
                        <div class="panel-heading text-uppercase clearfix">
                            <h3 class="title">Activation</h3>
                        </div>
                       <hr class="style-2"/> 
                        <div class="panel-body">
                                <div data-behaviour="content">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="media">
                                                <div class="media-left"><i class="fa fa-calendar-check-o fa-3x"></i></div>
                                                <div class="media-body">
                                                     <label class="control-label">Creation date</label>
                                                    <p class="form-control"><span><?php echo $obj_customer->created_at;?></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="media">
                                                <div class="media-left"><i class="fa fa-calendar-check-o fa-3x"></i></div>
                                                <div class="media-body">
                                                <div class="panel-heading text-uppercase clearfix">
                                                    <h3 class="title pull-left">Ether Address</h3>
                                                    <div class="pull-right">
                                                        <button type="button" onclick="alter_btc();" class="btn btn-primary btn-sm edit-btn">
                                                            <i class="fa fa-floppy-o" aria-hidden="true"></i>Save</button>
                                                    </div> 
                                                </div>
                                                <div class="panel-body">
                                                    
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <p class="form-control">
                                                                    <input type="text" id="btc" name="btc" class="form-control form-control" data-constraints="@NotEmpty" value="<?php echo $obj_customer->ether_address;?>"/><br/>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    
                                                </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-12">
                        <form name="form">
                        <div class="panel panel-default panel-form">
                            <div class="panel-heading text-uppercase"><h3>Cambiar Contraseña</h3></div>
                            <hr class="style-2">
                            <div class="panel-body">
                                <div class="">
                                    <div class="row">
                                    <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label required">Contraseña Actual</label>
                                        <input type="password" id="password" name="password" onblur="validate_password(this.value);" class="form-control form-control" maxlength="50" data-constraints="@NotEmpty"/>
                                        <!--<input type="password" required="required" class="form-control form-control"/>-->
                                        <span class="alert-0"></span>
                                    </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-sm-12">
                                    <div class="form-group"><label class="control-label required"><?php echo replace_vocales_voculeshtml("Nueva Contraseña");?></label>
                                        <input type="password" id="password_one" name="password_one" disabled  required="required" class="form-control form-control"/>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                    <div class="form-group"><label class="control-label required"><?php echo replace_vocales_voculeshtml("Repita Nueva Contraseña");?></label>
                                        <input type="password" id="password_two" name="password_two" required="required" disabled  class="form-control form-control"/></div>

                                    </div>
                                    </div>
                                <hr class="style-1">
                                    <div class="row">
                                        <div class="mb-10">
                                            <a class="btn btn-primary btn-block" onclick="alter_password();" name="button_password" style="word-wrap: break-word; white-space: normal !important;"><?php echo replace_vocales_voculeshtml("Cambiar Contraseña");?></a>
                                            <span style="position: relative;left: 25%;top: 50%; transform: translate(-50%, -50%);-webkit-transform: translate(-50%, -50%);" class="alert-1"></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                     </form>
                </div>
                </div>
            </div>
</div>
</div>
</div>
</div>
</div>  
<script src="<?php echo site_url().'static/assets/spin/js/spin.min.js';?>"></script>    
<script src="<?php echo site_url().'static/backoffice/js/data.js';?>"></script>
</section>
<script>
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
<style>
    /* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
   /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#45484d+0,000000+100;Black+3D+%231 */
background: #45484d; /* Old browsers */
background: -moz-radial-gradient(center, ellipse cover, #45484d 0%, #000000 100%); /* FF3.6-15 */
background: -webkit-radial-gradient(center, ellipse cover, #45484d 0%,#000000 100%); /* Chrome10-25,Safari5.1-6 */
background: radial-gradient(ellipse at center, #45484d 0%,#000000 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#45484d', endColorstr='#000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
color:white;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
    
    
