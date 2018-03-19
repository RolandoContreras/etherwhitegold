<script src="static/cms/js/core/bootstrap-modal.js"></script>
<script src="static/cms/js/core/bootbox.min.js"></script>
<script src="static/cms/js/core/jquery-1.11.1.min.js"></script>
<script src="static/cms/js/core/jquery.dataTables.min.js"></script>
<link href="static/cms/css/core/jquery.dataTables.css" rel="stylesheet"/>

<!-- main content -->
<div id="main_content" class="span9">
    <div class="row-fluid">
        <div class="widget_container" style="width: 120%;">
            <div class="well">
                    <div class="navbar navbar-static navbar_as_heading">
                            <div class="navbar-inner">
                                    <div class="container" style="width: 120%;">
                                            <a class="brand">LIST OF ORDERS</a>
                                    </div>
                            </div>
                    </div>
                <div class="well nomargin">
                    <!--- INCIO DE TABLA DE RE4GISTRO -->
                   <table id="table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>COD</th>
                                <th>DATE</th>
                                <th>USERNAME</th>
                                <th>NAME</th>
                                <th>AMOUNG ETH</th>
                                <th>AMOUNG EWG</th>
                                <th>ROUND</th> 
                                <th>DISCOUNT</th> 
                                <th>MARK AS</th> 
                                <th>STATUS</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($obj_orders as $value): ?>
                                <td align="center"><b><?php echo $value->order_id;?></b></td>
                                <td align="center"><b><?php echo formato_fecha_barras($value->date);?></b></td>
                                <td class="post_title" align="center"><b><?php echo $value->username;?></b></td>
                                <td align="center"><b><?php echo $value->first_name." ".$value->last_name;?></b></td>
                                <td align="center"><?php echo $value->amount_ether;?></td>
                                <td class="post_title" align="center"><?php echo $value->amount_ewg;?></td>
                                <td align="center"><?php echo $value->name;?></td>
                                <td class="post_title" align="center"><?php echo $value->percent."%";?></td>
                                <td align="center">
                                    <?php if ($value->active == 1) {
                                        $valor = "Awaiting confirmation";
                                        $stilo = "label label-warning";
                                    }elseif($value->active == 2){
                                        $valor = "Cancel";
                                        $stilo = "label label-important";
                                    }elseif($value->active == 3){
                                        $valor = "Processed";
                                        $stilo = "label label-success";
                                    } ?>
                                    <span class="<?php echo $stilo ?>"><?php echo $valor; ?></span>
                                </td>
                                <td align="center">
                                    <?php if ($value->status_value == 0) {
                                        $valor = "Inactive";
                                        $stilo = "label label-important";
                                    }else{
                                        $valor = "Active";
                                        $stilo = "label label-success";
                                    } ?>
                                    <span class="<?php echo $stilo ?>"><?php echo $valor; ?></span>
                                </td>
                                <td align="center">
                                    <div class="operation">
                                            <div class="btn-group">
                                                <?php 
                                                if($value->active == 1){ ?>
                                                    <button class="btn btn-small" onclick="mark_cancel('<?php echo $value->order_id;?>');"><i class="fa fa-ban"></i> Mark as Cancel</button>
                                                    <button class="btn btn-small" onclick="mark_processed('<?php echo $value->order_id;?>');"><i class="fa fa-check-circle"></i> Mark as Processed</button>
                                                <?php }elseif($value->active == 2){ ?>
                                                    <button class="btn btn-small" onclick="mark_awating('<?php echo $value->order_id;?>');"><i class="fa fa-ban"></i> Mark as Awating</button>
                                                    <button class="btn btn-small" onclick="mark_processed('<?php echo $value->order_id;?>');"><i class="fa fa-check-circle"></i> Mark as Processed</button>
                                                <?php }else{ ?>
                                                     <button class="btn btn-small" onclick="mark_awating('<?php echo $value->order_id;?>');"><i class="fa fa-ban"></i> Mark as Awating</button>
                                                    <button class="btn btn-small" onclick="mark_cancel('<?php echo $value->order_id;?>');"><i class="fa fa-check-circle"></i> Mark as cancel</button>
                                                <?php } ?>
                                          </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
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
<script src="static/cms/js/order.js"></script>