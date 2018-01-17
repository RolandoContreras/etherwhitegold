<!DOCTYPE html>
<html lang="en">	
<!-- Mirrored from wbpreview.com/previews/WB0LX21H9/ by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 06 Sep 2012 04:37:29 GMT -->
    <head>
        <meta charset="utf-8">
        <title>EtherWhiteGold CMS Admin</title>
        <base href="<?php echo site_url();?>">
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="robots" content="noindex, nofollow" />
        <!-- CSS -->
        <link href="<?php echo site_url()?>static/cms/css/core/bootstrap.css" rel="stylesheet">	
        <link href="<?php echo site_url()?>static/cms/css/core/combine_fonts.css" rel="stylesheet">	
        <link href="<?php echo site_url()?>static/cms/css/core/buttons.css" rel="stylesheet">
        <link href="<?php echo site_url()?>static/cms/css/style.css" rel="stylesheet">
        <link href="<?php echo site_url()?>static/css/style/style.css" rel="stylesheet">
        <!-- color style -->
        <link href="<?php echo site_url()?>static/cms/css/core/dark.css" rel="stylesheet">
        
        <link href="static/cms/css/core/bootstrap-responsive.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="plugins/html5.js"></script>
        <![endif]-->
        
    </head>
    <body>
        
        <div class="container-fluid">
            <div id="mensaje"></div>
            <div class="row-fluid">
                <div class="well" style="width:40%;margin:auto auto;">
                    <div class="navbar navbar-static navbar_as_heading">
                        <div class="navbar-inner">
                            <div class="container" style="width: auto;">
                                <a class="brand">EtherWhiteGold - CMS Admin</a>
                                
                            </div>
                        </div>
                    </div>
                    <form action="" method="get" id="login">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="prependedInput">Usuario o email</label>
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><img width="20" class="image_icons" src="<?php echo site_url().'static/cms/png/user91.png';?>"></span>
                                        <input class="input-xlarge-fluid" id="username" size="16" type="text" >
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="prependedInput">Contrase&ntilde;a</label>
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on"><img width="20" class="image_icons" src="<?php echo site_url().'static/cms/png/lock27.png';?>"></span>
                                        <input class="input-xlarge-fluid" id="password" size="16" type="password" >
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="button" class="btn btn-large btn-primary">Enviar</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        	
        <script src="<?php echo site_url().'static/cms/js/core/jquery.js';?>"></script>        
        <script src="<?php echo site_url().'static/cms/js/core/bootstrap.js';?>"></script>	                    
        <script src="<?php echo site_url().'static/cms/js/core/bootstrap-alert.js';?>"></script>
        <script src="<?php echo site_url().'static/cms/js/login.js';?>"></script>
    </body>
</html>