<?php if(have_posts()): While(have_posts()): the_post(); ?>
<article class="page" role="article">
    <header class="page-header">
        <h2 class="page-title">
            <?php echo the_title(); ?>
        </h2>
    </header>
    <div class="page-content">
        <?php the_content(); ?>
    </div>
</article>
<style>
    .page::before {
        content: "";
        position: absolute;
        z-index: -5;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-image:
            radial-gradient(ellipse closest-side, rgba(15, 14, 22, 0.5), #16141a),
            
			url(<?php the_post_thumbnail_url('large'); ?>);
        background-size: cover;
        background-repeat: no-repeat;
        opacity: 0.75;
    }

</style>
<?php endwhile; else: ?>
<span class="noresult">İçerik bulunamadı :(</span>
<?php endif; ?>