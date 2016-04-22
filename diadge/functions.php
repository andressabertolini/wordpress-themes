<?php 

// -------------------------------------------------------------------------
// Remove default controls
// -------------------------------------------------------------------------

function remove_customizer_settings( $wp_customize ){

  // $wp_customize->remove_panel('nav_menus');
  $wp_customize->remove_panel('static_front_page');
  $wp_customize->get_control('title_tagline')->label = esc_html__( 'Site Description', 'textdomain' );

}
add_action( 'customize_register', 'remove_customizer_settings', 20 );

// -------------------------------------------------------------------------
// Widgets area
// -------------------------------------------------------------------------

if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}

// -------------------------------------------------------------------------
// Custom header
// -------------------------------------------------------------------------

$header = array(
    'width'      => 1291,
    'flex-width' => true, 
    'height'      => 440,
    'flex-height' => true,
	'uploads'       => true,
);

add_theme_support( 'custom-header', $header );

// -------------------------------------------------------------------------
// Custom logo
// -------------------------------------------------------------------------

$logo = array(
	'flex-width' => true,
	'flex-height' => true,
);

add_theme_support( 'custom-logo', $logo );

// -------------------------------------------------------------------------
// Allow add post thumbnails
// -------------------------------------------------------------------------

add_theme_support( 'post-thumbnails' );

require get_template_directory() . '/inc/customizer.php';

add_action( 'customize_register', 'customizer' );


// -------------------------------------------------------------------------
// View Counter
// -------------------------------------------------------------------------

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

function setPostViews($postID) {
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
    $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// -------------------------------------------------------------------------
// Pagination
// -------------------------------------------------------------------------

function my_post_count_queries( $query ) {
  if (!is_admin() && $query->is_main_query()){
    if(is_home()){
       $query->set('posts_per_page', 1);
    }
  }
}

add_action( 'pre_get_posts', 'my_post_count_queries' );

function wordpress_pagination() {
    global $wp_query;

    $big = 999999999;

    echo paginate_links( array(
          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $wp_query->max_num_pages,
          'prev_text'          => __('«'),
          'next_text'          => __('»')                
    ) );
}

