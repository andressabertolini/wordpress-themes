<?php get_header(); ?>

<!-- ******************************************************** -->
<!-- CONTENT -->

        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="posts">
                        <!-- ******************************************************** -->
                        <!-- POSTS -->
                            <!-- <?php //$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?> 
                            <?php //query_posts("showposts=2&paged=$paged"); ?>  -->

                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="page-block">

                                <div class="post-header clearfix">

                                    <div class="post-info">
                                        <h1 class="post-title"><a style="color: <?php echo get_theme_mod('title_color'); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                        <p>

                                        </p>
                                    </div>                                    
                                </div>

                                <div class='post-image-corners'>

                                <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('post-image', array('class' => 'post-image'));

                                        echo "
                                        <div class='corner-top-left'></div>
                                        <div class='corner-top-right'></div>
                                        <div class='corner-bottom-left'></div>
                                        <div class='corner-bottom-right'></div>
                                        ";
                                    } 
                                ?>


                                </div>  

                                <p class="post-text"><?php the_content( '', TRUE ); ?></p>

                                <!-- Edit Post -->
                                <ins><?php edit_post_link(__( 'Edit Post <span class="glyphicon glyphicon-pencil"></span>', 'diadge' )); ?></ins> 


                            </div>

                            <?php endwhile?>

                            <?php else: ?>
                                <h1 class="post-title" style="color: <?php echo get_theme_mod('title_color'); ?>">No posts found</a></h1>
                            <?php endif; ?>

                        </div>
                    </div>

                    <?php get_sidebar(); ?>

                </div>
            </div>
        </div>

        <?php get_footer(); ?>
