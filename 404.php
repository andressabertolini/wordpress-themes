<?php
    /**
    *********************************************************
    *   404 Page
    *   @package diadge
    */   

    get_header(); 
?>

    <div class="wrapper not-found">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8">

                    <div class="page-block">
                        <h1 class="page-title"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-not-found.png" class="icon-not-found"><?php esc_html_e("Error, page not found","diadge"); ?></h1>
                        <p><?php esc_html_e("Nothing found. How about try one of the links below or a search?","diadge"); ?></p>
                    </div>
                    
                    <div class="page-block"> 
                        <h2 class="page-title"><?php esc_html_e("Search","diadge"); ?></h2>  
                        <?php get_search_form(); ?>
                    </div>

                    <div class="not-found-categories">    
                        <?php the_widget("WP_Widget_Categories", "title=".esc_html__("Categories", "diadge")); ?>
                    </div>

                </div>

                <?php get_sidebar(); ?>

            </div>
        </div>
    </div>

<?php get_footer(); ?>
