<script src="static/cms/js/core/bootstrap-modal.js"></script>
<script src="static/cms/js/core/bootbox.min.js"></script>
<script src="static/cms/js/core/jquery-1.11.1.min.js"></script>
<script src="static/cms/js/core/jquery.dataTables.min.js"></script>
<link href="static/cms/css/core/jquery.dataTables.css" rel="stylesheet"/>

<!-- main content -->
<div id="main_content" class="span9">
    <div class="row-fluid">
        <div class="widget_container" style="width: 110%;">
            <div class="well">
                    <div class="navbar navbar-static navbar_as_heading">
                            <div class="navbar-inner">
                                    <div class="container" style="width: 110%;">
                                            <a class="brand">LIST OF ASSOCIATES</a>
                                    </div>
                            </div>
                    </div>
                
             <!--<form>-->
                <div class="well nomargin" style="width: 100%;">
                    
                    <!--- INCIO DE TABLA DE RE4GISTRO -->
                   <table id="table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>COD</th>
                                <th>USERNAME</th>
                                <th>NAME</th>
                                <th>E-MAIL</th>
                                <th>PURCHASE</th> 
                                <th>STATUS</th> 
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($obj_customer as $value): ?>
                                <td align="center"><b><?php echo $value->customer_id;?></b></td>
                                <td align="center"><b><?php echo $value->username;?></b></td>
                                <td align="center"><?php echo $value->first_name." ".$value->last_name;?></td>
                                <td align="center"><?php echo $value->email;?></td>
                                <td align="center">
                                    <?php if ($value->active == 0) {
                                        $valor = "No";
                                        $stilo = "label label-important";
                                    }else{
                                        $valor = "Yes";
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
                                <td>
                                    <div class="operation">
                                            <div class="btn-group">
                                                <button class="btn btn-small" onclick="details_customer('<?php echo $value->customer_id;?>');"><i class="fa fa-eye"></i> More Detail</button>
                                                <button class="btn btn-small" onclick="edit_customer('<?php echo $value->customer_id;?>');"><i class="fa fa-edit"></i> Edit</button>
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
<script src="static/cms/js/customer.js"></script>