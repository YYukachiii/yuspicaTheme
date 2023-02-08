<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
        <title><?php bloginfo('name');?> - <?php bloginfo('description');?></title>
        <?php wp_head();?>
    </head>
    <body>
        <?php wp_body_open();?> // 固定内容

        <div id="page" class="site">
            <header id="masthead" class="site-header">
                <div class="site-branding">
                    <div class="site-branding-logo">
                        <?php the_custom_logo();?>
                    </div><!-- .site-branding-logo -->
                </div>
                <div class="site-branding-text">
                    <p class="site-title">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php bloginfo('name');?>
                        </a>
                    </p>
                    <p><?php echo get_bloginfo('description', 'display'); ?></p>
                </div>

                <nav id="site-navigation" class="main-navigation navigation-menu">
                    <div class="container">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary_menu',
                            'container' => false,
                            'menu_id' => 'primary-menu',
                            'menu_class' => 'nav-menu',
                        ));
                    ?>

                    <?php get_search_form();?>
                    </div><!-- .container -->
                </nav><!-- #site-navigation -->

            </header>
        </div>
    </body>
</html>

