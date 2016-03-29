    <div class="footer" style="background: <?php echo get_theme_mod('footer_color'); ?>">

    <img src="<?php echo get_template_directory_uri(); ?>/img/corner-rg-bt.png" class="footer-corner-right">
    <img src="<?php echo get_template_directory_uri(); ?>/img/corner-lf-bt.png" class="footer-corner-left">

    <p class="footer-blog-name">
        <?php 

            $value = get_theme_mod('footer_logo');

            if($value != ""){             
                echo "<img src='".get_theme_mod('footer_logo')."' class='custom-logo'>";

                }else if(has_custom_logo()){ 
                    echo the_custom_logo();
                } 
            ?> <?php echo bloginfo('title')?>
    </p>

    <p class="footer-copyright">Copyright &copy; <?php echo date('Y'); ?> | <?php echo get_theme_mod('footer_text'); ?> Theme By <a href="http://www.reancy.com" target="_blank">Reancy</a></p>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/simple-likes-public.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <?php wp_footer(); ?>

    </body>
</html>