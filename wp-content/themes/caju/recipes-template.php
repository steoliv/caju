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
    <?php endif; ?>



</div>

    <section class="recipes-template">
        <div class="container">
            <div class="row">
                    <section class="content-page">
                        <div class="container recipes">
                        <?php

                            $per_page = get_theme_mod( 'set_per_page_recipes', 3 );
                            $category_include = get_theme_mod( 'set_category_include_recipes' );
                            $category_exclude = get_theme_mod( 'set_category_exclude_recipes' );

                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => $per_page,
                                'category__in' => explode( ",", $category_include),
                                'category__not_in' => explode( ",", $category_exclude)
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
            </div>
        </div>
    </section>

</main>

<?php

get_footer();

?>