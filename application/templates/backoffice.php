<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="EtherWhiteGold is an ERC20 tokens focused on being a currency accessible to the public and easy to use. Its innovative features allow the community to use ETWG as a means of payment in different areas of entertainment such as virtual casino">
<meta name="keywords" content="EtherWhiteGold, EWG, cryptocurrency, virtual casino">
<title>Backoffice | EtherWhiteGold</title>
<script src="https://use.fontawesome.com/3aa4a6fd0b.js"></script>

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo site_url().'static/page_front/images/favicon/apple-icon-57x57.png'?>">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo site_url().'static/page_front/images/favicon/apple-icon-60x60.png'?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url().'static/page_front/images/favicon/apple-icon-72x72.png'?>">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url().'static/page_front/images/favicon/apple-icon-76x76.png'?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url().'static/page_front/images/favicon/apple-icon-114x114.png'?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url().'static/page_front/images/favicon/apple-icon-120x120.png'?>">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo site_url().'static/page_front/images/favicon/apple-icon-144x144.png'?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo site_url().'static/page_front/images/favicon/apple-icon-152x152.png'?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url().'static/page_front/images/favicon/apple-icon-180x180.png'?>">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo site_url().'static/page_front/images/favicon/android-icon-192x192.png'?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url().'static/page_front/images/favicon/favicon-32x32.png'?>">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo site_url().'static/page_front/images/favicon/favicon-96x96.png'?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url().'static/page_front/images/favicon/favicon-16x16.png'?>">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- /site favicon -->
<!-- Entypo font stylesheet -->
<link href="<?php echo site_url().'static/backoffice/css/assets/entypo.css';?>" rel="stylesheet">
<!-- /entypo font stylesheet -->
<link href="<?php echo site_url().'static/backoffice/css/one/style_one.css';?>" rel="stylesheet">
<!-- Font awesome stylesheet -->
<link href="<?php echo site_url().'static/backoffice/css/assets/font-awesome.min.css';?>" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="<?php echo site_url().'static/backoffice/css/assets/bootstrap.min.css';?>" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="<?php echo site_url().'static/backoffice/css/assets/mouldifi-core.css';?>" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<link href="<?php echo site_url().'static/backoffice/css/assets/mouldifi-forms.css';?>" rel="stylesheet">

<!--Bootstrap-wysihtml5-->
<link rel='stylesheet' id='bos_sb_main_css-css'  href='<?php echo site_url().'static/backoffice/css/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css';?>' type='text/css' media='all' />
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

<!--[if lte IE 8]>
	<script src="js/plugins/flot/excanvas.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var site = '<?php echo site_url();?>';
</script>
</head>
<body>

<!-- Page container -->
<div class="page-container">

	<!-- Page Sidebar -->
	<div class="page-sidebar">
	
		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo">
                      <a href="<?php echo site_url().'backoffice';?>">
                          <img src="<?php echo site_url().'static/page_front/images/logo/logo.png';?>" width="200px" alt="Logo EtherWhiteGold">
                      </a>
                  </div>
		  <div class="sidebar-collapse hidden-xs">
                      <a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a>
                  </div>
		  <div class="sidebar-mobile-menu visible-xs">
                      <a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#">
                          <i class="icon-menu"></i>
                      </a>
                  </div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
                     <?php 
                                    $url = explode("/",uri_string()); 
                                    $style_inicio = "";
                                    $style_misdatos = "";
                                    if(isset($url[1])){
                                        switch ($url[1]) {
                                            ////////
                                                    case "profile":
                                                        $style_misdatos = "a_active";
                                                        break;
                                                    case "upgrade":
                                                        $style_upgrade = "a_active";
                                                        break;
                                                    default:
                                                         $title = "Inicio";
                                            }
                                    }else{
                                        $style_inicio = "a_active";
                                    }
                                    ?>  
                        <li class="has-sub"><a href="<?php echo site_url().'backoffice'?>" class="<?php echo $style_inicio;?>"><i class="fa fa-tachometer fa-lg"></i><span class="title">Dashboard</span></a></li>
                        <li class="has-sub"><a href="<?php echo site_url().'backoffice/profile'?>" class="<?php echo $style_misdatos;?>"><i class="fa fa-address-book fa-lg"></i><span class="title">My Profile</span></a></li>
                        <li class="has-sub"><a href="<?php echo site_url().'login/logout';?>" class="<?php echo $style_pagos;?>"><i class="fa fa-sign-out fa-lg"></i><span class="title">Sign Out</span></a></li>
		</ul>
		<!-- /main navigation -->		
  </div>
  <!-- /page sidebar -->
  
  <!-- Main container -->
  <div class="main-container gray-bg">
  
		<!-- Main header -->
		<div class="main-header row">
		  <div class="col-sm-6 col-xs-7">
		  
			<!-- User info -->
			<ul class="user-info pull-left">          
                            <li class="profile-info dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> 
                                    <img width="44" class="img-circle avatar" alt="" src="<?php echo site_url().'static/backoffice/images/avatar/avatar.png';?>"><?php echo $_SESSION['customer']['name'];?> &nbsp;&nbsp;<i class="fa fa-arrow-down" aria-hidden="true"></i>
                                </a>

                                          <!-- User action menu -->
                              <ul class="dropdown-menu">

                                  <li><a href="<?php echo site_url().'backoffice/profile';?>"><i class="fa fa-user-circle-o" aria-hidden="true"></i>My profile</a></li>
                                  <li><a href="<?php echo site_url().'backoffice/messages'; ?>"><i class="fa fa-comment" aria-hidden="true"></i>Mensajes</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo site_url().'login/logout';?>"><i class="fa fa-sign-out fa-lg"></i>Salir</a></li>
                              </ul>
                                          <!-- /user action menu -->

                            </li>
                          </ul>
			<!-- /user info -->
		  </div>
		</div>
		<!-- /main header -->
		
	<!-- Main section-->
            <?php echo $body;?> 
      <!--START FOOTER-->
      <footer class="footer-main"> 
			© Copyright 2017. All Rights Reserved  -<strong> EtherWhiteGold</strong>
      </footer>	
  <!-- /main container -->
  
</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.min.js';?>"></script>
<script src="<?php echo site_url().'static/backoffice/js/assets/bootstrap.min.js';?>"></script>

<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.metisMenu.js';?>"></script>
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery-ui.js';?>"></script>
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.blockUI.js';?>"></script>
<!--Float Charts-->
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.flot.min.js';?>"></script>
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.flot.tooltip.min.js';?>"></script>
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.flot.resize.min.js';?>"></script>
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.flot.selection.min.js';?>"></script>        
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.flot.pie.min.js';?>"></script>
<script src="<?php echo site_url().'static/backoffice/js/assets/jquery.flot.time.min.js';?>"></script>
<script src="<?php echo site_url().'static/backoffice/js/assets/functions.js';?>"></script>

<!--ChartJs-->
<script src="<?php echo site_url().'static/backoffice/js/assets/Chart.min.js';?>"></script>
</body>
</html>
