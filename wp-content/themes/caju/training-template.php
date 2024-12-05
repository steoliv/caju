<?php
/*
Template name: Training Template

*/

get_header();

?>

<main class="main">
  
    <div class="container-fluid banner-header">
        <img src="<?php  header_image()?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
    </div>

    <section class="recipes-template">
        <div class="container">
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <section class="content-page">
                        <div class="container recipes">
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 10,
                                'category__in' => array(6),
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