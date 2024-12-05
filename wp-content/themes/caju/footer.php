

<footer class="site-footer">
    <div class="container">

    <div class="row">
        <div class="footer-menu col-md-8 col-sm-12">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'depth' => 0)); ?>
            
        </div>
        <nav class="copyright col-md-4 col-sm-12">
            Copyright - <?php echo bloginfo('name');?> - All Rights Reserved
        </nav>
    </div>
</div>
</footer>


<?php wp_footer(); ?>