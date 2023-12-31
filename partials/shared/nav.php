<?php require get_template_directory() . "/lib/EduhubNavWalker.php" ?>

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>


<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <a href="<?php echo home_url() ?>" class="logo m-0 float-start"><?php echo bloginfo("name") ?><span class="text-primary">.</span></a>
                    </div>
                    <div class="col-8 text-center ">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'primary-menu',
                                'container' => '',
                                'menu_class' => "js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto",
                                'depth' => 3,
                                'walker' => new EduhubNavWalker()
                            )
                        ) ?>
                    </div>
                    <div class="col-2 text-end">
                        <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                            <span></span>
                        </a>

                        <a href="#" class="call-us d-flex align-items-center">
                            <span class="icon-phone"></span>
                            <span>123-489-9381</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>