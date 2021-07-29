<?php get_header(); ?>
<div class="main-loop search-results">
    <h1 class="template-title">Arama Sonuçları</h1>
        <ul class="main-loop-list">
        <?php if(have_posts()):while(have_posts()):the_post() ?>
            <li>
                <div class="main-loop-item">
                    <h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                    <div><?php echo the_excerpt(); ?></div>
                    <span class="main-loop-meta">
                        <?php echo the_category(); ?>       
                        <?php echo the_date(); ?>       
                    </span>           
                </div>
            </li>
        <?php endwhile; else: ?>
        </ul>
        <span class="noresult">Sonuç bulunamadı :(</span>
        <?php endif; ?>
    </div>
<style>
    .search-results::before {
        content: "";
        position: absolute;
        z-index: -5;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-image:
            radial-gradient(ellipse closest-side, rgba(15, 14, 22, 0.5), #16141a),
            url(<?php echo get_template_directory_uri()?>/assets/img/ipx.jpeg);
        background-size: cover;
        background-repeat: no-repeat;
        opacity: 0.75;
    }

</style>

<?php get_footer(); ?>