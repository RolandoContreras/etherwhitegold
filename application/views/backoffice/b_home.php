<script src="static/cms/js/core/jquery.js"></script>        
<script src="<?php echo site_url().'static/page_front/js/bootbox.min.js';?>"></script>
<script src="static/cms/js/core/bootstrap-modal.js"></script>
<section>
    <div class="section-heading row">
        <div class=" col-lg-9 col-md-8 col-sm-7 col-xs-12">
            <h1 class="title text-uppercase">Home</h1>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right count-down-box">
            <a class="white">EWG Price: <?php echo $obj_bonus->name."<br/>".$obj_bonus->price;?> ETH</a>
        </div>
    </div> 
         <!-- Page content-->
    <div class="content-wrapper">
        <div class="row fix-box-height package-box-fix mt-30">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well media media-badges box-height box">
                            <div class="media-body media-middle">
                            <h5 class="media-heading text-uppercase title-small">TOTAL PAID</h5>
                            <p class="title"><?php if(!is_null($obj_total_pay)){echo $obj_total_pay;}else{echo "0.00";}?></p>
                            <div class="mt-10"></div>
                            </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-usd fa-4x" aria-hidden="true"></i>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="well media media-badges box-height box">
                            <div class="media-body media-middle">
                            <h5 class="media-heading text-uppercase title-small">BALANCE OF ETHERWHITEGOLD</h5>
                            <p class="title"><?php if(!is_null($obj_total_etherwhitegold)){echo $obj_total_etherwhitegold;}else{echo "0.00";}?></p>
                            <div class="mt-10">
                            </div>
                            </div>
                        <div class="media-right media-middle">
                            <i class="fa fa-university fa-4x" aria-hidden="true"></i>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        <div class="col-md-12"> 
            <div class="panel panel-default">
                    <div class="panel-heading clearfix"> 
                            <div class="panel-title">TO BUY</div> 
                    </div>
                <div class="col-sm-5">
                        <div class="well media media-badges box-height">
                            <div class="media-body media-middle">
                            <input type="text" onkeyup="validate_eth(this.value);" class="form-control form-control" name="eth" id="eth"/> 
                            <div class="mt-10"></div>
                            </div>
                        <div class="media-right media-middle">
                                <label>ETH</label>
                            </div>
                        </div>
                </div>
                <div class="col-sm-2">
                    <div class="well">
                        <img style="padding: 5px" src="<?php echo site_url().'static/backoffice/images/exchange.png';?>" alt="ether" width="90%"/>    
                        </div>
                </div>
                <div class="col-sm-5">
                        <div class="well media media-badges box-height box">
                            <div class="media-body media-middle">
                                <h5 class="media-heading text-uppercase title-small"></h5>
                            <input type="text" onkeyup="validate_ewg(this.value);" class="form-control form-control" name="ewg" id="ewg"/> 
                            <input type="hidden" name="price" id="price" value="<?php echo $obj_bonus->price;?>"/> 
                            <div class="mt-10"></div>
                            </div>
                        <div class="media-right media-middle">
                                <label>EWG</label>
                            </div>
                        </div>
                </div>
                <div class="col-sm-12">
                    <div class="bs-example">
                        <a onclick="make_order();"><button type="button" class="btn btn-success btn-block"><i class="fa fa-check"></i>&nbsp;&nbsp;<span class="bold">Send the order</span></button></a>     
                        <br/>
                    </div>
                </div>
            </div> 
        </div>    

            <!--PAKAGE SELECTED-->
        <div class="col-md-12"> 
            <div class="panel panel-info">
                    <div class="col-md-3"> 
                        <div class="panel panel-default">
                                    <!-- panel body --> 
                                    <div class="panel-body"> 
                                            <p>
                                                <img src="<?php echo site_url()."static/page_front/images/etherwhitegold.jpg";?>" alt="etherwhitegold"/>
                                            </p>
                                    </div> 
                            </div> 
                    </div>
                        <div class="col-md-9"> 
                                <div class="panel panel-default">
                                        <div class="panel-heading clearfix"> 
                                            <div class="panel-title"><b>PURCHASING MODE</b></div> 
                                        </div> 
                                        <!-- panel body --> 
                                        <div id="spinner"></div>
                                        <div class="panel-body"> 
                                             <p>Send the amount you have requested from to the following address of Ethereum: <b>0x58FB4f49044266e0233121Ae8fF5589809c067C8</b><br/> Send a message by clicking on the button below indicating the user and the voucher or identification code of the transaction made.<br></p><br/>
                                             <div class="bs-example">
                                                 <a href="<?php echo site_url().'backoffice/message_confirmation';?>"><button type="button" class="btn btn-black btn-block"><i class="fa fa-upload"></i>&nbsp;&nbsp;<span class="bold">Send Confirmation Message</span></button></a>
                                            </div>
                                        </div> 
                                </div> 
                        </div>
                </div> 
        </div>
        </div>
    </div>
   </section>
<script src="<?php echo site_url().'static/backoffice/js/home.js';?>"></script>
<script src="<?php echo site_url().'static/assets/spin/js/spin.min.js';?>"></script>