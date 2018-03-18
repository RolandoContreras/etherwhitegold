     <!-- Main section-->
      <section>
         <!-- Page content-->
         <div class="content-wrapper">
           <div class="section-heading row">
                <div class=" col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <h1 class="title text-uppercase">My Orders</h1>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right count-down-box">
                    <a class="white"><?php echo $obj_bonus->name." - ".$obj_bonus->percent.'%'."<br/>".$obj_bonus->price;?> ETH</a>
                </div>
            </div> 
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
             </div>
            <div class="row">
               <div class="col-lg-12">
                    <div id="panelDemo14" class="panel panel-info">
                     <div class="panel-heading">My Orders</div>
                     <div class="panel-body">
                           <table id="table" class="display table table-striped table-hover responsive">
                              <thead>
                                <tr>
                                    <th class="all">Date</th>
                                    <th>Concept</th>
                                    <th>Round</th>
                                    <th>Price</th>
                                    <th>Amount ETH</th>
                                    <th>Amount EWG</th>
                                    <th>Status</th>
                                    
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($obj_order as $value) { ?>
                                      <tr role="row" class="odd">
                                            <td class="sorting_1"><?php echo formato_fecha_barras($value->date);?></td>
                                            <td>EWG Purchase</td>
                                            <td><?php echo $value->name;?></td>
                                            <td><b><?php echo $value->price;?></b></td>
                                            <td><?php echo $value->amount_ether;?></td>
                                            <td><span class="text-success"><b><?php echo $value->amount_ewg;?></b></span></td>
                                            <td>
                                                   <?php 
                                                   if($value->active == 1){ ?>
                                                       <span class="label label-danger">Awaiting Confirmation</span>
                                                   <?php }elseif($value->active == 2){ ?>
                                                       <span class="label label-success">Processed</span>
                                                   <?php } ?>
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