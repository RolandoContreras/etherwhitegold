<script src="static/cms/js/core/bootstrap-modal.js"></script>
<script src="static/cms/js/core/bootbox.min.js"></script>
<script src="static/cms/js/core/jquery-1.11.1.min.js"></script>
<script src="static/cms/js/core/jquery.dataTables.min.js"></script>
<link href="static/cms/css/core/jquery.dataTables.css" rel="stylesheet"/>

<!-- main content -->
<div id="main_content" class="span11">
    <div class="row-fluid">
        <div class="widget_container">
            <div class="well">
                    <div class="navbar navbar-static navbar_as_heading">
                            <div class="navbar-inner">
                                    <div class="container" style="width: 100%;">
                                            <a class="brand">LISTADO DE  COBROS</a>
                                    </div>
                            </div>
                    </div>
                
             <!--<form>-->
                <div class="well nomargin" style="width: 100% !important;">
                    <!--- INCIO DE TABLA DE RE4GISTRO -->
                   <table id="table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>COD</th>
                                <th>DATE</th>
                                <th>IMAGE</th>
                                <th>USERNAME</th>
                                <th>NAME</th>
                                <th>AMOUNT EWG</th>
                                <th>AMOUNT ETH</th>
                                <th>ROUND</th>
                                <th>MARK AS</th>
                                <!--<th>ACTIONS</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($obj_pay as $value): ?>
                            <tr>
                                <td align="center"><?php echo $value->activation_message_id;?></td>
                                <td align="center"><?php echo formato_fecha_barras($value->date);?></td>
                                <td align="center">
                                    <img src="<?php echo site_url()."static/backoffice/uploads/$value->img";?>" alt="<?php echo $value->img;?>" />
                                </td>
                                <td align="center"><b><a class="pending"><?php echo $value->username;?></a></b></td>
                                <td align="center"><?php echo $value->first_name." ".$value->last_name;?></td>
                                <td align="center"><b><a style="color:green;"><?php echo $value->amount_ewg;?></a></b></td>
                                <td align="center"><b><a style="color:red;"><?php echo $value->amount_eth;?></a></b></td>
                                <td align="center"><?php echo $value->name;?></td>
                                <td align="center">
                                    <?php if ($value->active == 1) {
                                        $valor = "Awaiting confirmation";
                                        $stilo = "label label-warning";
                                    }elseif($value->status_value == 2){
                                        $valor = "Cancel";
                                        $stilo = "label label-important";
                                    }elseif($value->status_value == 3){
                                        $valor = "Processed";
                                        $stilo = "label label-success";
                                    } ?>
                                    <span class="<?php echo $stilo ?>"><?php echo $valor; ?></span>
                                </td>
<!--                                <td align="center">
                                    <div class="operation">
                                            <div class="btn-group">
                                                <?php 
                                                if($value->active == 1){ ?>
                                                    <button class="btn btn-small" onclick="ver_detalle('<?php echo $value->activation_message_id;?>');"><i class="fa fa-ban"></i> Mark as Cancel</button>
                                                    <button class="btn btn-small" onclick="pagado('<?php echo $value->activation_message_id;?>','<?php echo $value->first_name;?>','<?php echo $value->username;?>');"><i class="fa fa-check-circle"></i> Mark as Processed</button>
                                                <?php }elseif($value->active == 2){ ?>
                                                    <button class="btn btn-small" onclick="ver_detalle('<?php echo $value->activation_message_id;?>');"><i class="fa fa-ban"></i> Mark as Awating</button>
                                                    <button class="btn btn-small" onclick="pagado('<?php echo $value->activation_message_id;?>','<?php echo $value->first_name;?>','<?php echo $value->username;?>');"><i class="fa fa-check-circle"></i> Mark as Processed</button>
                                                <?php }else{ ?>
                                                     <button class="btn btn-small" onclick="ver_detalle('<?php echo $value->activation_message_id;?>');"><i class="fa fa-ban"></i> Mark as Awating</button>
                                                    <button class="btn btn-small" onclick="pagado('<?php echo $value->activation_message_id;?>','<?php echo $value->first_name;?>','<?php echo $value->username;?>');"><i class="fa fa-check-circle"></i> Mark as cancel</button>
                                                <?php } ?>
                                          </div>
                                    </div>
                                </td>-->
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
            </div>
           <!--</form>-->         
        </div>
    </div>
</div><!-- main content -->
</div>
<script type="text/javascript">
   $(document).ready(function() {
    $('#table').dataTable( {
         "order": [[ 0, "desc" ]]
    } );
} );
</script>
<script src="static/cms/js/cobros.js"></script>