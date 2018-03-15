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
                                    <div class="container" style="width: auto;">
                                            <a class="brand">USERS LIST</a>
                                            <?php 
                                            if($obj_users_data->privilage == 3){ ?>
                                                <button class="btn btn-small" onclick="nuevo_users();">New</button>
                                            <?php } ?>
                                    </div>
                            </div>
                    </div>
                
             <!--<form>-->
                <div class="well nomargin" style="width: 100%;">
                    <!--- INCIO DE TABLA DE RE4GISTRO -->
                   <table id="table" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>USERNAME</th>
                                <th>PASSWORD</th>
                                <th>NAME</th>
                                <th>E-MAIL</th>
                                <th>PRIVILEGES</th>
                                <th>CREATION DATE</th>
                                <th>STATUS</th> 
                                <?php 
                                    if($obj_users_data->privilage == 3){ ?>
                                        <th>ACTIONS</th>
                                <?php } ?>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php foreach ($obj_users as $value): ?>
                                <td align="center"><b><?php echo $value->user_name;?></b></td>
                                <td align="center"><b><?php echo $value->password;?></b></td>
                                <td align="center"><?php echo $value->first_name." ".$value->last_name;?></td>
                                <td align="center"><?php echo $value->email;?></td>
                                <td align="center">
                                    <?php 
                                    if ($value->privilage == 3){
                                        echo "<b>"."Control Total"."</b>";
                                    }elseif($value->privilage == 2){
                                        echo "<b>"."Control Medio"."</b>";
                                    }else{
                                        echo "<b>"."Control Simple"."</b>";
                                    }
                                    
                                    ?>
                                </td>
                                <td align="center"><?php echo formato_fecha($value->created_at);?></td>
                                <td align="center">
                                    <?php if ($value->status_value == 1) {
                                        $valor = "Active";
                                        $stilo = "label label-success";
                                    }else{
                                        $valor = "Inactive";
                                        $stilo = "label label-important";
                                    } ?>
                                    <span class="<?php echo $stilo ?>"><?php echo $valor; ?></span>
                                </td>
                                <?php 
                                if($obj_users_data->privilage == 3){ ?>
                                    <td>
                                        <div class="operation">
                                                <div class="btn-group">
                                                            <button class="btn btn-small" onclick="edit_users('<?php echo $value->user_id;?>');"><i class="fa fa-edit"></i> Edit</button>
                                              </div>
                                        </div>
                                    </td>
                                <?php } ?>
                               
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
<script src="static/cms/js/users.js"></script>