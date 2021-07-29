<?php

    add_action('init', 'register_mynavs');
    function register_mynavs(){
        register_nav_menus(array(
            'main_menu'     => 'Ana Navigasyon',
            'footer_menu'   => 'Footer Navigasyon',
			'depth'			=> 2
        ));
    }

    
    add_action( 'widgets_init', 'register_mywidgets' );
    function register_mywidgets(){
        register_sidebar( array(
            'name'          => __( 'Footer Widget Area', 'tutsplus' ),
            'id'            => 'first-footer-widget-area',
            'description'   => __( 'The first footer widget area', 'tutsplus' ),
            'before_widget' => '<div id="%1$s" class="footer-widget-container %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
    }

    add_theme_support( 'post-thumbnails' );

    add_filter( 'wpseo_opengraph_url', 'my_opengraph_url' );
    function my_opengraph_url( $url ) {
            return str_replace( 'https://', 'http://', $url );
    }

    add_filter( 'wpseo_opengraph_image', 'change_opengraph_image_url' );
    function change_opengraph_image_url( $url ) {
        return str_replace('current_domain.com', 'new_domain.com', $url);
    }
?>
<?php 
function fb_opengraph() {
global $post;
if(is_single()) {
if(has_post_thumbnail($post->ID)) {
$img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium');
} else {
$img_src = get_stylesheet_directory_uri() . '/img/opengraph_image.jpg';
}
if($excerpt = $post->post_excerpt) {
$excerpt = strip_tags($post->post_excerpt);
$excerpt = str_replace("", "'", $excerpt);
} else {
$excerpt = get_bloginfo('description');
}
?>
<meta property="og:title" content="<?php echo the_title(); ?>"/>
<meta property="og:description" content="<?php echo $excerpt; ?>"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="<?php echo the_permalink(); ?>"/>
<meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
<meta property="og:image" content="<?php echo $img_src[0]; ?>"/>
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:url" content="<?php echo the_permalink(); ?>" />
<meta name="twitter:title" content="<?php echo the_title(); ?>" />
<meta name="twitter:description" content="<?php echo $excerpt; ?>" />
<meta name="twitter:image:src" content="<?php echo $img_src[0]; ?>" />
<meta name="twitter:site" content="21organic" />
<?php
} else {
return;
}
}
add_action('wp_head', 'fb_opengraph', 5);
?>


