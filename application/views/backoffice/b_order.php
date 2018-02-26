     <!-- Main section-->
      <section>
         <!-- Page content-->
         <div class="content-wrapper">
           <div class="section-heading row">
                <div class=" col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <h1 class="title text-uppercase">My Orders</h1>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right count-down-box">
                    <a class="white">EWG Price: <?php echo $obj_bonus->name."<br/>".$obj_bonus->price;?> ETH</a>
                </div>
            </div> 

            <div class="row">
               <div class="col-lg-12">
                    <div id="panelDemo14" class="panel panel-info">
                     <div class="panel-heading">Mi Balance</div>
                     <div class="panel-body">
                           <table id="table" class="display table table-striped table-hover responsive">
                              <thead>
                                <tr>
                                    <th class="all">Fecha</th>
                                    <th>Concepto</th>
                                    <th>Monto</th>
                                    <th>Periodo</th>
                                    <th>EWG</th>
                                    <th>Estado</th>
                                    
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($obj_commissions as $value) { ?>
                                      <tr role="row" class="odd">
                                          <td class="sorting_1"><?php echo formato_fecha($value->date);?></td>
                                          <td>Concepto &nbsp;<?php echo $value->bonus;?></td>
                                            <td>
                                            <span class="text-success"><?php echo "$".$value->amount;?></span>
                                            </td>
                                            <td>
                                               <span class="label label-success">
                                                   <?php 
                                                   if($value->status_value == 1 || $value->status_value == 2){ ?>
                                                       <span class="label label-success">Procesado</span>
                                                   <?php }else{ ?>
                                                       <span class="label label-warning">En espera por procesar</span>
                                                   <?php } ?>
                                               </span> 
                                            </td>
                                       </tr>
                                 <?php } ?>
                              </tbody>
                           </table>
                     </div>
                  </div>
                    
               </div>

            </div>
            
         </div>
      </section>
      <!-- Page footer-->
<script src="<?php echo site_url().'static/cms/js/core/bootstrap-modal.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/bootbox.min.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/jquery-1.11.1.min.js';?>"></script>
<script src="<?php echo site_url().'static/cms/js/core/jquery.dataTables.min.js';?>"></script>
<link href="<?php echo site_url().'static/cms/css/core/jquery.dataTables.css';?>" rel="stylesheet"/>

 <script type="text/javascript">
   $(document).ready(function() {
    $('#table').dataTable( {
         "order": [[ 0, "desc" ]]
    } );
} );
</script>
</body>

</html>