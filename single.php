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

                                <div class="post-header post clearfix">
                                    <div class="post-date" style="background: <?php echo get_theme_mod('date_color','#00b5fa'); ?>">
                                        <div class="post-date-corners"></div>
                                        <p class="post-day"><?php the_time('d') ?></p>
                                        <p class="post-month"><?php the_time('M') ?></p>
                                    </div>
                                    <div class="post-info">
                                        <h1 class="post-title"><a style="color: <?php echo get_theme_mod('title_color','#00b5fa'); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                        <p>

                                            <span class="post-author"><?php the_author_posts_link(); ?></span>

                                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="color: <?php echo get_theme_mod('icons_color','#999999'); ?>"></span><span class="post-icons" style="color: <?php echo get_theme_mod('icons_color','#999999'); ?>"><?php echo getPostViews(get_the_ID());?></span> 
                                        </p>
                                    </div>                                    
                                </div>

                                <?php
                                    if ( has_post_thumbnail() ) {

                                        echo "<div class='post-image-corners'>";

                                        the_post_thumbnail('post-image', array('class' => 'post-image'));

                                        echo "
                                            <div class='corner-top-left'></div>
                                            <div class='corner-top-right'></div>
                                            <div class='corner-bottom-left'></div>
                                            <div class='corner-bottom-right'></div>
                                        </div> 
                                        ";
                                    } 
                                ?>

                                <p class="post-text"><?php the_content( '', TRUE ); ?></p>

                                <ul class="random-cats">
                                <?php
                                    
                                    $counter = 0;
                                    $max = 3;
                                    $taxonomy = 'category';
                                    $terms = get_terms($taxonomy);
                                    shuffle ($terms);
                                    
                                    if ($terms) {
                                        foreach($terms as $term) {
                                            $counter++;
                                            if ($counter <= $max) {
                                            echo '<li class="cat-item"><a href="' . get_category_link( $term->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $term->name ) . '" ' . '>' . $term->name.'</a></li> ';
                                            }
                                    }
                                    }
                                ?>
                                </ul>

                                 <div class="post-comments">
                                    <div class="post-comments-icon"><span class="post-comment"><?php comments_popup_link('0', '1', '%', 'comment-icon', ''); ?></span></div>
                                </div>

                                <!-- Edit Post -->
                                <ins>
                                    <?php edit_post_link(__( 'Edit Post <span class="glyphicon glyphicon-pencil"></span>', 'diadge' )); ?>
                                </ins>


                            </div>


                            <?php comments_template(); ?>


                            <?php endwhile?>

                            <?php else: ?>
                                <h1 class="post-title" style="color: <?php echo get_theme_mod('title_color','#00b5fa'); ?>">No posts found</a></h1>
                            <?php endif; ?>

                        </div>
                    </div>

                    <?php get_sidebar(); ?>

                </div>
            </div>
        </div>

        <?php get_footer(); ?>