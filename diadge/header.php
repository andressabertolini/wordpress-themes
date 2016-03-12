<!doctype html>
<html class="no-js">
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

        <title><?php wp_title(); ?></title>

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/icomoon.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

        <?php wp_head(); ?>

</head>
<body>

<!-- ******************************************************** -->
<!-- MENU -->

        <nav class="navbar navbar-default" style="background: <?php echo get_theme_mod('menu_color','#005176'); ?>">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only"><!-- Toggle navigation --></span>
                    MENU
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="wrapper">
                    <ul class="nav navbar-nav">
                        <?php wp_nav_menu('navbar-nav'); ?>
                    </ul>

                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left search-header">
                        <div class="form-group search">
                            <form action="/" method="get" accept-charset="utf-8" id="searchform" role="search">
                              <div class="search-menu"> 

                                <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" class="form-control search-input" placeholder="<?php esc_html_e("SEARCH POSTS HERE...","diadge");?>"/>

                                <button type="submit" id="searchsubmit" class="btn search-btn"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                                                
                              </div>
                            </form>
                        </div>
                    </form>

                    <li class="social-list-item" style="<?php if (get_theme_mod('facebook_show',1) == 0) { echo 'display:none'; } ?>"><a href="<?php echo get_theme_mod('facebook_link','#'); ?>" target="_blank" class="nav-social-icon display-facebook"><span class="icon-facebook" aria-hidden="true"></span></a></li>

                    <li class="social-list-item" style="<?php if (get_theme_mod('twitter_show',1) == 0) { echo 'display:none'; } ?>"><a href="<?php echo get_theme_mod('twitter_link','#'); ?>" target="_blank" class="nav-social-icon display-twitter"><span class="icon-twitter" aria-hidden="true"></span></a></li>

                    <li class="social-list-item" style="<?php if (get_theme_mod('instagram_show',1) == 0) { echo 'display:none'; } ?>"><a href="<?php echo get_theme_mod('instagram_link','#'); ?>" target="_blank" class="nav-social-icon display-instagram"><span class="icon-instagram" aria-hidden="true"></span></a></li>

                  </ul>
                  </div>
                </div>
            </div>
        </nav>