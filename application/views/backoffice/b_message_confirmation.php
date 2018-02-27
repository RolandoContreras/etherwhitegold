<section>
    <div class="section-heading row">
        <div class=" col-lg-9 col-md-8 col-sm-7 col-xs-12">
            <h1 class="title text-uppercase">CONFIRMATION MESSAGE</h1>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right count-down-box">
            <a class="white">EWG Price: <?php echo $obj_bonus->name."<br/>".$obj_bonus->price;?> ETH</a>
        </div>
    </div> 
         <!-- Page content-->
    <div class="content-wrapper">
        <div class="row fix-box-height package-box-fix mt-30">
            <div class="col-lg-12">
                <div class="row"><div class="col-sm-6"></div>
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
            
            <?php 
            if(count($obj_order) != 0){ ?>
                <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="mail-box-header">
                    <div class="mail-box-header clearfix">
                            <h3 class="mail-title">Activation Mail</h3>
                            <div class="pull-right tooltip-demo">
                                <a title="Cancelar" data-placement="top" data-toggle="tooltip" class="btn btn-danger btn-sm" href="<?php echo site_url().'backoffice'?>" data-original-title="Discard email"><i class="fa fa-times"></i>To return</a>
                            </div>
                    </div>
                    <div class="mail-body">
                        <form method="post" id="upload_form" enctype="multipart/form-data">
                                <label>From :</label>
                                    <div class="form-group">
                                        <input class="form-control" name="first_name" id="first_name" placeholder="De" value="<?php echo $obj_customer->first_name." ".$obj_customer->last_name;?>" disabled="">
                                        <input type="hidden" name="customer_id" id="customer_id" value="<?php echo $obj_customer->customer_id;?>">
                                        <input type="hidden" name="bonus_id" id="bonus_id" value="<?php echo $obj_bonus->bonus_id;?>">
                                    </div>
                                 <label>For:</label>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="To" value="<?php echo "EWG Support - Activation";?>" disabled="">
                                    </div>
                                 <label>Date Order:</label>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="To" value="<?php echo formato_fecha_barras($obj_order->date);?>" disabled="">
                                    </div>
                                 <label>Amount to receive in EWG:</label>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="To" value="<?php echo $obj_order->amount_ewg;?>" disabled="">
                                    </div>
                                 <label>Amount to send in ETH</label>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="To" value="<?php echo $obj_order->amount_ether;?>" disabled="">
                                    </div>
                                 <label>Subject:</label>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Subject" type="text" value="Activation Mail" disabled="">
                                    </div>
                                 <label>Seleccionar imagen del envio:</label>
                                    <div class="form-group">
                                        <input type="file" value="Upload Imagen de Envio" name="image_file" id="image_file">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" placeholder="Body Message" style="height: 200px;width: 100% !important"></textarea>
                                    </div>
                                    <hr>
                                    <div class="form-group text-right">
                                        <button type="submit" name="upload" id="upload" class="btn btn-primary"> Send </button>
                                    </div>
                                     <div id="uploaded_image"></div>
                            </form>
                    </div>
               </div>
            </div>
          <?php }else{ ?>
            <div class="alert alert-danger" style="text-align: center">Must make a purchase order</div>
            <?php } ?>
            
        </div>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    </div>
   </section>
<script>
$(document).ready(function(){
    $("#upload_form").on('submit',function(e){
        e.preventDefault();
        if($('#image_file').val() == ''){
            $("#uploaded_image").html('<div class="alert alert-danger" style="text-align: center">You must select an image</div>  ');
        }else{
                $.ajax({
                url : "<?php echo site_url().'backoffice/message_confirmation/upload'?>",
                method: "POST",
                data:new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success:function(data){
                    $("#uploaded_image").html(data);
                }
            });
        }
    });
});
</script>
<script src="<?php echo site_url().'static/backoffice/js/home.js';?>"></script>
<script src="<?php echo site_url().'static/assets/spin/js/spin.min.js';?>"></script>