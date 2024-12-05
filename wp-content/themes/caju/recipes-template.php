<?php
/*
Template name: Recipes Template

*/

get_header();

?>

<main class="main">
<?php if(has_post_thumbnail()):?>

    <div class="container-fluid page-template" style="background-image:url('<?php  the_post_thumbnail_url()?>')">
            <div class="overflow">

            </div>
        </div>
    <?php endif; ?><div class="container-fluid banner-header">



</div>

    <section class="recipes-template">
        <div class="container">
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <section class="content-page">
                        <div class="container receipes">
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 10,
                                'category__in' => array(8,9),
                                'category__not_in' => array(1)
                            );

                            $postlist = new WP_Query( $args );

                            while ( $postlist->have_posts() ) : $postlist->the_post(); 
                            
                                get_template_part('parts/content', 'recipes-template');
                            
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </section>


                    </article>
                <?php endwhile; ?>
                   

                    
            </div>
        </div>
    </section>

</main>

<?php

get_footer();

?>