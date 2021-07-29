<?php get_header(); ?>
<?php get_template_part('template_parts/main','loop'); ?>
<style>
    body::before {
        content: "";
        position: absolute;
        z-index: -5;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-image:
            radial-gradient(ellipse closest-side, rgba(15, 14, 22, 0.5), #16141a),
            url(<?php echo get_template_directory_uri()?>/assets/img/web.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        opacity: 0.75;
    }

</style>
<?php get_footer(); ?>
