<script src="static/cms/js/core/jquery.js"></script>        
<script src="<?php echo site_url().'static/page_front/js/bootbox.min.js';?>"></script>
<script src="static/cms/js/core/bootstrap-modal.js"></script>
<section>
    <div class="section-heading row">
        <div class=" col-lg-9 col-md-8 col-sm-7 col-xs-12">
            <h1 class="title text-uppercase">My Profile</h1>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right count-down-box">
            <a class="white"><?php echo $obj_bonus->name." - ".$obj_bonus->percent.'%'."<br/>".$obj_bonus->price;?> ETH</a>
        </div>
    </div> 
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
                                                        <a onclick="alter_btc(<?php echo $obj_customer->customer_id;?>);"><button type="button" class="btn btn-success btn-block"><i class="fa fa-check"></i>&nbsp;&nbsp;<span class="bold">Save</span></button></a>     
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
                                                    <div class="col-sm-12" id="message_addres"></div>
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
                            <div class="panel-heading text-uppercase"><h3>Change Password</h3></div>
                            <hr class="style-2">
                            <div class="panel-body">
                                <div class="">
                                    <div class="row">
                                    <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label required">Current password</label>
                                        <input type="password" id="password" name="password" onblur="validate_password(this.value);" class="form-control form-control" maxlength="50" data-constraints="@NotEmpty"/>
                                        <span class="alert-0"></span>
                                    </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-sm-12">
                                    <div class="form-group"><label class="control-label required"><?php echo "New Password";?></label>
                                        <input type="password" id="password_one" name="password_one" disabled  required="required" class="form-control form-control"/>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-12">
                                    <div class="form-group"><label class="control-label required"><?php echo "Repeat new password";?></label>
                                        <input type="password" id="password_two" name="password_two" required="required" disabled  class="form-control form-control"/></div>

                                    </div>
                                    </div>
                                <hr class="style-1">
                                    <div class="row">
                                        <div class="mb-10">
                                            <a class="btn btn-success btn-block" onclick="alter_password();" name="button_password" style="word-wrap: break-word; white-space: normal !important;"><?php echo "Save Password";?></a>
                                        </div>
                                        <span class="alert-1"></span>
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
<!--<script src="<?php echo site_url().'static/assets/spin/js/spin.min.js';?>"></script>-->
<script src="<?php echo site_url().'static/backoffice/js/data.js';?>"></script>
</section>