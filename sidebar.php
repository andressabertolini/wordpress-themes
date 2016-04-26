<!-- ******************************************************** -->
<!-- ABOUT -->
                    <div class="col-sm-12 col-md-4">
                        <div class="about">
                            <div class="sidebar-author sidebar-session">
                                <div class="about-image-corners">
                                <?php 
                                    $empty = get_theme_mod('author_image');

                                    if($empty != ''){
                                        echo '
                                        <img src="'. get_theme_mod('author_image') .'" class="about-image" />
                                        <div class="corner-top-left"></div>
                                        <div class="corner-top-right"></div>
                                        <div class="corner-bottom-left"></div>
                                        <div class="corner-bottom-right"></div>
                                        ';
                                    }
                                ?>

                                </div>   

                                <h1 class="about-title" style="color: <?php echo get_theme_mod('sidebar_title_color','#'); ?>"><?php echo get_theme_mod('author_name','Author'); ?></h1>

                                <p class="about-text"><?php echo get_theme_mod('author_description','Lorem ipsum dolor sit amet.'); ?></p>

                            </div> 

                            <!-- Widgets area -->
                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
                            <?php endif; ?>

                        </div>
                    </div>