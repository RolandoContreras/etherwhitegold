<?php 
    $url = explode("/",uri_string());
    if(isset($url[2])){
        if($url[2]=="detalle"){
            $style = "disabled";
            $button_style = "style='display: none;'";
        }else{
            $style = "";
            $button_style = "";
        }
    } 
?>
<script src="<?php echo site_url();?>static/cms/js/customer.js"></script>
<script src="<?php echo site_url();?>static/cms/plugins/ckeditor/ckeditor.js"></script>
<!-- main content -->
<form id="customer-form" name="customer-form" enctype="multipart/form-data" method="post" action="<?php echo site_url()."dashboard/clientes/validate";?>">
<div id="main_content" class="span7">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                <div class="navbar navbar-static navbar_as_heading">
                        <div class="navbar-inner">
                                <div class="container" style="width: auto;">
                                        <a class="brand"></i>Customer Detail</a>
                                </div>
                        </div>
                </div>
                <!--GET CUSTOMER ID-->
              <input type="hidden" name="customer_id" id="customer_id" value="<?php echo isset($obj_customer)?$obj_customer->customer_id:"";?>">
              <br><br>
              <strong>ID:</strong><br>
              <input type="text" id="customer_id" name="customer_id" value="<?php echo isset($obj_customer->customer_id)?$obj_customer->customer_id:"";?>" class="input-xlarge-fluid" placeholder="ID" disabled>
              <br><br>
              <strong>Username:</strong><br>
              <input type="text" id="username" name="username" value="<?php echo isset($obj_customer->username)?$obj_customer->username:"";?>" class="input-xlarge-fluid" placeholder="Username" <?php echo $style;?>>
              <br><br>
              <strong>First Name:</strong><br>
              <input type="text" id="first_name" name="first_name" value="<?php echo isset($obj_customer->first_name)?$obj_customer->first_name:"";?>" class="input-xlarge-fluid" placeholder="First Name" <?php echo $style;?>>
              <br><br>
              <strong>Last Name:</strong><br>
              <input type="text" id="last_name" name="last_name" value="<?php echo isset($obj_customer->last_name)?$obj_customer->last_name:"";?>" class="input-xlarge-fluid" placeholder="Username" <?php echo $style;?>>
              <br><br>
              <strong>Password:</strong><br>              
              <input type="text" id="password" name="password" value="<?php echo isset($obj_customer->password)?$obj_customer->password:"";?>" class="input-xlarge-fluid" placeholder="Password" <?php echo $style;?>>
              <br><br>
              <strong>E-mail:</strong><br>
              <input type="text" id="email" name="email" value="<?php echo isset($obj_customer->email)?$obj_customer->email:"";?>" class="input-xlarge-fluid" placeholder="Correo Electrónico" <?php echo $style;?>>
              <br><br>
              <strong>Fecha de Creación:</strong><br>
              <input type="text" id="date_end" name="date_end" class="input-small-fluid" value="<?php echo isset($obj_customer->created_at)?formato_fecha_barras($obj_customer->created_at):"";?>" <?php echo $style;?>>
              <br><br>
              
              <div class="inner">
                    <strong>Compra EWG:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="active" id="active" <?php echo $style;?>>
                                <option value="">[ Seleccionar ]</option>
                                <option value="1" <?php if(isset($obj_customer)){
                                    if($obj_customer->active == 1){ echo "selected";}
                                }else{echo "";} ?>>Si</option>
                                <option value="0" <?php if(isset($obj_customer)){
                                    if($obj_customer->active == 0){ echo "selected";}
                                }else{echo "";} ?>>No</option>
                    </select>
               </div>
              <br><br>
              <strong>Ether Wallet:</strong><br>
              <input type="text" id="btc_address" name="btc_address" class="input-xlarge-fluid" placeholder="Direccion de BitCoin" value="<?php echo isset($obj_customer->ether_address)?$obj_customer->ether_address:"";?>" <?php echo $style;?>>
                <br><br>
             <div class="well nomargin" style="width: 200px;">
                      <div class="inner">
                          <strong>Estado para el sistema:</strong>
                          <select name="status_value" id="status_value" <?php echo $style;?>>
                                      <option value="">[ Seleccionar ]</option>
                                      <option value="0" <?php if(isset($obj_customer)){
                                          if($obj_customer->status_value == 0){ echo "selected";}
                                      }else{echo "";} ?>>Inactivo</option>
                                      <option value="1" <?php if(isset($obj_customer)){
                                          if($obj_customer->status_value == 1){ echo "selected";}
                                      }else{echo "";} ?>>Activo</option>
                          </select>
                      </div>
                  </div>
                <br><br>
                <br><br>
                <div class="subnav nobg">
                    <button class="btn btn-danger btn-small pull-left" type="reset" onclick="cancelar_customer();">Cancel</button>                    
                    <button class="btn btn-primary btn-small pull-right" type="submit" <?php echo $button_style;?>>Save</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->
</form>