<?php
   
            if (   ! is_active_sidebar( 'first-footer-widget-area'  )

            )
        return;
        ?>
<div class="footer-widgets">
    <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
    <div class="social_media_links footer-widget-container">
        <h3 title="widget-title">
            Takip edin
        </h3>
        <ul>
            <li><a href="mailto:coskun.canli@gmail.com"><i class="fas fa-envelope"></i>coskuncanli@gmail.com</a></li>
            <li><a target="_blank" href="https://twitter.com/coskuncanli"><i class="fab fa-twitter"></i>twitter.com/coskuncanli</a></li>
            <li><a target="_blank" href="https://www.facebook.com/coskuncanli"><i class="fab fa-facebook-f"></i>facebook.com/coskuncanli</a></li>
            <li><a target="_blank" href="https://www.linkedin.com/in/coskuncanli"><i class="fab fa-linkedin-in"></i>linkedin.com/coskuncanli</a></li>
        </ul>

    </div>
</div>
