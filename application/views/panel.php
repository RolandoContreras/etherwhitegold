<script src="static/cms/js/core/bootstrap-modal.js"></script>
<script src="static/cms/js/core/bootbox.min.js"></script>
<script src="static/cms/js/core/jquery-1.11.1.min.js"></script>
<script src="static/cms/js/core/jquery.dataTables.min.js"></script>
<link href="static/cms/css/core/jquery.dataTables.css" rel="stylesheet"/>
<div class="row-fluid">
    <div class="span6">
        <div class="widget_container">
                <div class="well nomargin">
                        <div class="navbar navbar-static navbar_as_heading">
                                <div class="navbar-inner">
                                        <div class="container" style="width: auto;">
                                                <a class="brand">Quick View</a>
                                        </div>
                                </div>
                        </div>
                        <table id="quick_view" class="table">
                                <thead>
                                        <tr>
                                                <th>CMS</th>
                                                <th>Actions</th>
                                        </tr>
                                </thead><!-- table heading -->
                                <tbody>
                                        <tr>
                                            <td><a href="<?php echo site_url().'dashboard/clientes'?>"><b><?php echo $obj_total->total_customer;?></b><i class="fa fa-users"></i> Customer
                                                </a></td>
                                                <td><a href="<?php echo site_url().'dashboard/clientes'?>"><b class="cmd">0</b><i class="fa fa-bitcoin"></i> buyer</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="<?php echo site_url().'dashboard/comentarios';?>"><b><?php echo $obj_total->total_comments;?></b><i class="fa fa-comments"></i> Comments</a></td>
                                                <td><a href="<?php echo site_url().'dashboard/comentarios';?>" class="pending"><b class="cmd"><?php echo $obj_total->pending_comments;?></b><i class="fa fa-exclamation"></i> To read</a></td>
                                        </tr>
                                        <tr>
                                                <td><a href="<?php echo site_url().'dashboard/usuarios';?>"><b><?php echo $obj_total->total_users;?></b><i class="fa fa-user-secret"></i> Users</a></td>
                                                <td class="blank">&nbsp;</td>
                                        </tr>
                                </tbody>
                        </table>
                </div>
        </div>
    </div>

        <div class="span6">
                <div id="quick_comment_view" class="widget_container">
                        <div class="well">							
                                <div class="navbar navbar-static navbar_as_heading">
                                        <div class="navbar-inner">
                                                <div class="container" style="width: auto;">
                                                        <a class="brand">Last Comment</a>
                                                </div>
                                        </div>
                                </div>
                            <?php 
                            if(count($obj_last_comment) > 0){ ?>
                                <div class="row-fluid">
                                    <div class="comment_container span12" style="margin-left:auto;">
                                        <div class="span2">
                                            <img style="padding: 8px" src="<?php echo site_url('static/cms/images/email-icon.jpg');?>" alt="mensajes"/>
                                        </div>
                                        <div class="span10" style="margin-left:auto;">
                                            <div class="comment_content">
                                                <p class="meta"><span class="comment_date"><?php echo formato_fecha($obj_last_comment->date_comment);?></span> | <a href="#"><?php echo $obj_last_comment->email;?></a></p>
                                                    <p><a href="#" class="comment_author"><?php echo $obj_last_comment->name;?></a> : <?php echo $obj_last_comment->comment;?></p>
                                                    <p>
                                                            <a class="btn btn-mini btn-success" href="#">Mark as Read</a> 
                                                            <a class="btn btn-mini btn-warning" href="#">Mark as Unread</a> 
                                                            <a class="btn btn-mini btn-danger" href="#">Delete</a> 
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php echo site_url("dashboard/comentarios");?>" class="btn btn-duadua">All Comments</a>
                                </div>
                            <?php }else{ ?>
                                    <div class="row-fluid">
                                            <div class="comment_container span12" style="margin-left:auto;">
                                                <div class="span2">
                                                    <img style="padding: 8px" width="40" src="<?php echo site_url('static/cms/images/email-icon.jpg');?>" alt="mensajes"/>
                                                </div>
                                                <div class="span10" style="margin-left:auto;">
                                                    <div class="comment_content">
                                                        <p class="meta"><span class="comment_date">No hay mensajes</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <a href="<?php echo site_url("dashboard/comentarios");?>" class="btn btn-duadua">All Comments</a>
                                    </div>
                            <?php }  ?>
                        </div>
                </div>
        </div>
</div>
<script src="static/cms/js/panel.js"></script>