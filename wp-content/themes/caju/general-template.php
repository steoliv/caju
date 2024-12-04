<?php
/*
Template name: General Template

*/

get_header();

?>

<main class="main">
<div class="container-fluid banner-header">
    <img src="<?php  header_image()?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
</div>

    <section class="general-template">
        <div class="container">
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="general-template-loop col-md-12">
                        <?php the_content();?>
                    </article>
                <?php endwhile; ?>
                   

                    
            </div>
        </div>
    </section>

</main>

<?php

wp_footer();

?>