<section>
    <div class="section-heading row">
        <div class=" col-lg-9 col-md-8 col-sm-7 col-xs-12">
            <h1 class="title text-uppercase">My Guests</h1>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right count-down-box">
            <a class="white"><?php echo $obj_bonus->name." - ".$obj_bonus->percent.'% discount'."<br/>".$obj_bonus->price;?> ETH</a>
        </div>
    </div> 
<!------------------------------------------->
<div id="page-content-wrapper">
    <main>
        <div class="container-fluid">
            <div class="row ml-custom">
                <div class="col-xs-12">
                    <div class="col-lg-12">
                        <div class="panel panel-default network-tree-panel">
                           <div class="cont-arbol">
                            <div class="tree" style="width: 1000%;"> 
                                <div class="col-lg-12"><hr class="style-2"></div>
                                <ul>
                                    <li>
                                    <span class="inline-block relative">
                                                    <a href="#" data-toggle="popover" data-placement="right" data-container="body" title="Affiliate Data" data-content="
                                                Name: <?php echo $obj_customer->first_name." ".$obj_customer->last_name;?>
                                                Registration Date: <?php echo $obj_customer->created_at;?>
                                                Status:
                                                <?php if($obj_customer->active == 1){ ?>
                                                          Active
                                                      <?php }else{ ?>
                                                          Inactive
                                                      <?php } ?>" class="some-popover-link">

                                          <div class="row imagen-profile">
                                            <div class="col-sm-2" style="padding: 0;"></div>
                                            <div class="col-sm-8" style="padding: 0;">
                                              <div class="div-img">
                                                  <img src="<?php echo site_url()."static/backoffice/images/avatar/avatar.png";?>" alt="avatar" width="150">
                                              </div>
                                            </div>
                                                  <?php if($obj_customer->active == 1 ){$style = 'text-success';$text = 'Activo';}else{$style = 'text-danger';$text = 'Inactivo';}?>
                                          </div>
                                          </a>
                                        <span class="tree_text"><?php echo $obj_customer->username;?></span> - <span class="tree_text"><a class="<?php echo $style;?>"><?php echo $text;?></a></span>
                                            
                                                </span>
                            <!--BEGIN SECOND LEVEL-->
                            <?php 
                            if(count($obj_customer_n2) > 0){ ?>
                                <ul>
                                    <?php 
                                     foreach ($obj_customer_n2 as $value) { ?>
                                        <li>
                                            <a href="#" data-toggle="popover" data-placement="right" data-container="body" title="Datos del Afiliado" data-content="
                                                Name: <?php echo $value->first_name." ".$value->last_name;?>
                                                Registration Date: <?php echo $value->created_at;?>
                                                Status: 
                                                <?php if($value->active == 1){ ?>
                                                          Active
                                                      <?php }else{ ?>
                                                          Inactive
                                                      <?php } ?>" class="some-popover-link">

                                          <div class="row imagen-profile">
                                            <div class="col-sm-2" style="padding: 0;"></div>
                                            <div class="col-sm-8" style="padding: 0;">
                                              <div class="div-img">
                                            <img src="<?php echo site_url().'static/backoffice/images/avatar/avatar.png';?>" alt="avatar" width="150">
                                              </div>
                                            </div>
                                          </div>
                                          </a>
                                            <?php if($value->active == 1 ){$style = 'text-success';$text='Activo';}else{$style = 'text-danger';$text='Inactivo';}?>
                                            <span class="tree_text"><?php echo $value->username;?></span> - <span class="tree_text"><a class="<?php echo $style;?>"><?php echo $text;?></a></span>
                                            <br><br><br>
                                        </li>
                                        
                                     <?php }?>
                            </ul>
                           <?php } ?>
                            <!--END PRIMARIO-->
                           </li>
                           <!--END ID ARBOL-->
                        </ul>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>                        
        </div>
    </main>
</div>
</section>
<script type="text/javascript">
    $(this).popover({
            html:true
        });
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="popover"]').popover({ html : true });
});
</script>
<link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/arbol.css';?>" id="maincss">
<link rel="stylesheet" href="<?php echo site_url().'static/page_front/css/style.css';?>" id="style-css">