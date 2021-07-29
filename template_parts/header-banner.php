<header class="masterheader" role="banner" id="masterheader">
    <div class="banner-container">
        <h1 class="site-title">
            <a href="<?php echo site_url(); ?>">
                <?php echo bloginfo('site-title'); ?>
				
            </a>
        </h1>
        <nav class="mainnav" role="navigation">
            <?php wp_nav_menu(); ?>
        </nav>
    </div>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <?php wp_nav_menu(); ?>
        <div class="sm-container-responsive">
            <a target="_blank" href="https://twitter.com/coskuncanli"><i class="fab fa-twitter fa-lg"></i></a>
            <a target="_blank" href="https://www.facebook.com/coskuncanli"><i class="fab fa-facebook-f fa-lg"></i></a>
            <a target="_blank" href="https://www.linkedin.com/in/coskuncanli/"><i class="fab fa-linkedin-in fa-lg"></i></a>
   
            <div class="search-box">
                <form action="<?php echo site_url(); ?>" method="get">
                    <input type="search" name="s" placeholder="arama">
                </form>
            </div>
        </div>
    </div>
    <span id="btn-menu" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
    <div class="sm-container">
        <a target="_blank" href="https://twitter.com/coskuncanli"><i class="fab fa-twitter"></i></a>
        <a target="_blank" href="https://www.facebook.com/coskuncanli"><i class="fab fa-facebook-f"></i></a>
        <a target="_blank" href="https://www.linkedin.com/in/coskuncanli/"><i class="fab fa-linkedin-in"></i></a>
        <span class="search-btn"><i class="fas fa-search"></i></span>
        <div id="search-box">
            <form action="<?php echo site_url(); ?>" method="get">
                <input type="search" name="s" id="search" placeholder="arama">
            </form>
        </div>
    </div>
</header>
