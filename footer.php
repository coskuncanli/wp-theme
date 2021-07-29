</main>

    <footer class="mainfooter" role="contentinfo">
        <?php get_template_part('template_parts/footer','widget'); ?>
    </footer>
    <div class="copyright">
        <div class="copyright-inner">
			<span class="site-name"><a href="<?php echo site_url(); ?>">coskuncanli.com</a> <i class="far fa-copyright"></i> <?php echo date('Y'); ?></span><span style="font-style: italic">Proudly powered by <i class="fab fa-wordpress"></i> Wordpress</span>
            
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/functions.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/prism.js"></script>
    <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "100%";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
    </script>
<?php wp_footer(); ?>
</body>

</html>
