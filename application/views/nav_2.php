<nav class="navbar navbar-expand-lg navbar-light">
    <!-- Logo -->
    <a class="navbar-brand" href="<?php echo site_url();?>">
        <img width="40" src="<?php echo site_url().'static/page_front/images/logo/logo.png';?>" alt="logo"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <!-- Menu Area -->
    <div class="collapse navbar-collapse" id="ca-navbar">
        <ul class="navbar-nav ml-auto" id="nav">
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url().'#home';?>">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url().'#about';?>">About</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url().'#services';?>">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url().'#team';?>">Team</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url().'#contact';?>">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url().'login';?>">Login</a></li>
        </ul>
        <div class="sing-up-button d-lg-none">
            <a href="<?php echo site_url().'register';?>">Sign Up Free</a>
        </div>
    </div>
</nav>