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

    <div class="recipes-template">
        <div class="container">
            <div class="row">
                <section class="content-page">
                    <div class="container recipes">
                    <?php
                        $per_page = get_theme_mod( 'set_per_page_training', 3 );
                        $category_include = get_theme_mod( 'set_category_include_training' );
                        $category_exclude = get_theme_mod( 'set_category_exclude_training' );

                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => $per_page,
                            'category__in' => explode( ",", $category_include),
                            'category__not_in' => explode( ",", $category_exclude)
                        );

                        $postlist = new WP_Query( $args );

                        while ( $postlist->have_posts() ) : $postlist->the_post(); 
                        
                            get_template_part('parts/content', 'training-template');
                        
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </section>
                 
            </div>
        </div>
    </div>

</main>

<?php

get_footer();

?>