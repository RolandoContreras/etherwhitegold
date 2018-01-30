<section>
    <div class="section-heading row">
        <div class=" col-lg-9 col-md-8 col-sm-7 col-xs-12">
            <h1 class="title text-uppercase">Home</h1>
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
                            <h5 class="media-heading text-uppercase title-small">TOTAL PAGADO</h5>
                            <p class="title"><?php if(count($obj_total)>0){echo "$".number_format($obj_total,'2','.',',');}else{echo "$0.00";}?></p>
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
                            <h5 class="media-heading text-uppercase title-small">BALANCE DE ETHERWHITEGOLD</h5>
                            <p class="title"><?php if(count($obj_balance)>0){echo "$".number_format($obj_balance,'2','.',',');}else{echo "$0.00";}?></p>
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
            <div class="col-lg-6">
                <div class="well media media-badges box box-height">
                <div class="row">
                    <div class="col-sm-8">
                        
                            <div class="media-body media-middle">
                            <h5 class="media-heading text-uppercase title-small">PAQUETE ACTUAL</h5>
                            <p class="title"><?php echo $text_franchise;?></p>
                            <div class="mt-10"></div>
                            </div>
                        <div class="media-right media-middle">
                            <img style="max-width: 120px" src="<?php echo site_url()."static/backoffice/images/$images_franchise";?>" alt="<?php echo $text_franchise;?>"/>
                        </div>
                        </div>
                    
                </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12"> 
                                <div class="panel panel-success">
                                        <div class="panel-heading clearfix"> 
                                            <div class="panel-title">Mensaje: <b>Inicio de Actividades</b></div> 
                                        </div> 
                                        <!-- panel body --> 
                                        <div class="panel-body"> 
                                            <p><?php echo replace_vocales_voculeshtml("Del 24 de Octubre el 31 de Octubre del 2017 se considera tiempo de pre apertura, durante este periodo de tiempo pueden ir desarrollando el negocio con total normalidad hasta empezar las actividades el 1 de Noviembre. Las comisiones generadas durante el tiempo de pre apertura serán procesadas con normalidad. El día miércoles 01 de noviembre del 2017, empezamos actividades de 3T Company contando con los servicios de viajes, educación, forex y todas las áreas al 100%.");?></p> 
                                            <p><?php echo replace_vocales_voculeshtml("Desde la fecha de inicio (1 Noviembre) ya se empezará a hacer los respectivos re consumos cada quince días para que se mantenga activa su respectiva cuenta.");?></p> 
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