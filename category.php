<?php get_header(); ?>
<div class="main-loop" style="padding-top:1.4em;">
    <h1 class="template-title"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?> kategorisinde yazılar</h1>
</div>
<?php get_template_part('template_parts/main', 'loop'); ?>
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
            url(<?php echo get_template_directory_uri()?>/assets/img/vader.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        opacity: 0.75;
    }

</style>
<?php get_footer(); ?>
