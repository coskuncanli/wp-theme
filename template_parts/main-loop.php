<div class="main-loop">
    <ul class="main-loop-list" role="list">
        <?php if(have_posts()): While(have_posts()): the_post(); ?>
        <li>
            <div class="main-loop-item">
                <h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                <span class="main-loop-meta">
                    <?php echo the_category(); ?> -     
                    <?php echo get_the_date(); ?>       
                </span>           
            </div>
        </li>
        <?php endwhile; else: ?>
    </ul>
    <span class="noresult">İçerik bulunamadı :(</span>
    <?php endif; ?>
	<?php wp_pagenavi(); ?>
</div>
