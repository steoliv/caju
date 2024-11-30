

<footer class="site-footer">
    <div class="container">

        <div class="copyright">
            Copyright - All Rights Reserved
        </div>
        <nav class="footer-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'depth' => 1)); ?>
        </nav>
    </div>
</footer>


<?php wp_footer(); ?>