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

                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <h2 class="pagetitle">Search Results for "<?php echo $s ?>"</h2>

                            <div class="page-block">

                                <div class="post-header clearfix">
                                    <div class="post-date" style="background: <?php echo get_theme_mod('date_color'); ?>">
                                        <div class="post-date-corners"></div>
                                        <p class="post-day"><?php the_time('d') ?></p>
                                        <p class="post-month"><?php the_time('M') ?></p>
                                    </div>
                                    <div class="post-info">
                                        <h1 class="post-title"><a style="color: <?php echo get_theme_mod('title_color'); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                        <p>

                                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="color: <?php echo get_theme_mod('icons_color'); ?>"></span><span class="post-icons"><?php echo getPostViews(get_the_ID());; ?></span>

                                            <span class="glyphicon glyphicon-heart" aria-hidden="true" style="color: <?php echo get_theme_mod('icons_color'); ?>"></span><span class="post-icons post-comment-likes">
                                            <?php
                                                $like_count = get_post_meta( get_the_ID(), "_post_like_count", true );
                                                $like_count = ( isset( $like_count ) && is_numeric( $like_count ) ) ? $like_count : 0;
                                                echo $like_count; 
                                            ?>                                                

                                            </span>

                                             | <span class="post-author"><?php the_author_posts_link(); ?></span>
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

                                <!-- Random Categories -->
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

                                            if (get_theme_mod('show_uncategorized') == 0){
                                                if($term->term_id !== 1){
                                                    if ($counter <= $max) {
                                                    echo '<li class="cat-item"><a href="' . get_category_link( $term->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $term->name ) . '" ' . '>' . $term->name.'</a></li> ';
                                                    }                                                
                                                } 
                                            }else{

                                                if ($counter <= $max) {
                                                    echo '<li class="cat-item"><a href="' . get_category_link( $term->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $term->name ) . '" ' . '>' . $term->name.'</a></li> ';
                                                }
                                            }

                                        }
                                    }

                                ?>
                                </ul>
                                <div class="post-comments">
                                    <div class="post-comments-icon"><span class="post-comment"><?php comments_popup_link('0', '1', '%', 'comment-icon', ''); ?></span></div>
                                </div>

                                <!-- Edit Post -->
                                <ins><?php edit_post_link(__( 'Edit Post <span class="glyphicon glyphicon-pencil"></span>', 'diadge' )); ?></ins>                           

                            </div>

                            <?php endwhile?>

                            <?php
                                $count_posts = wp_count_posts();
                                $published_posts = $count_posts->publish;

                                if($published_posts >= 3){
                                ?>
                                    <p class="post-pages"><?php wordpress_pagination(); ?></p>
                                <?php    
                                }
                            ?>



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
