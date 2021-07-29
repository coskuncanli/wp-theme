<?php if(have_posts()): While(have_posts()): the_post(); ?>
<article class="post" role="article">
    <header class="post-header">
        <h2 class="post-title">
            <?php echo the_title();?>
        </h2>
        <div class="post-meta">
            <span class="post-date">
                <i class="far fa-calendar-alt"></i> <?php echo the_date(); ?> 
            </span>
            <span class="post-cat">
                <i class="fas fa-cat"></i> <?php echo the_category(); ?> 
            </span>
        </div>
    </header>
    <div class="post-content">
        <?php the_content(); ?>
        <div class="post-share">
            <span class="post-print"><a href="#"  onclick="window.print(); return false;"><i class="fas fa-print"></i> Yazdır</a></span>
            <span class="post-twit">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-show-count="true" target="_blank">
                    <i class="fab fa-twitter"></i> Paylaş
                </a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </span>
        </div>
        <?php get_template_part('template_parts/single','postnav'); ?>

       <?php 
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
    ?>
    <?php if(has_post_thumbnail()): ?>
        <style>
            .post-header::before {
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
    <?php endif; ?>
<?php endwhile; else: ?> 
    </div>
    
</article>
    
<span class="noresult">İçerik bulunamadı :(</span>
<?php endif; ?>
