<?php

get_header();

?>

<div class="container-fluid page-template">
        <?php get_template_part('parts/hero'); ?>
        
    </div>

    <section class="blog-home">
        <div class="container">

        
            <div class="row">
                <div class="col-md-8 col-12 blog-list">
                    <div class="container">
                    <div class="blog-items">
                        <?php 
                        
                        $per_page = get_theme_mod( 'set_per_page', 3 );
                        $category_include = get_theme_mod( 'set_category_include' );
                        $category_exclude = get_theme_mod( 'set_category_exclude' );
    
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => $per_page,
                            'category__in' => explode( ",", $category_include),
                            'category__not_in' => explode( ",", $category_exclude)
                        );
                        
                        $postlist = new WP_Query( $args );

                        if (  $postlist->have_posts() ) : while (  $postlist->have_posts() ) :  $postlist->the_post(); 

                            get_template_part('parts/content');

                        endwhile; 
                        wp_reset_postdata();?>
                        
                        <div class="paginacao">
                            <div class="pages new">
                                <?php echo paginate_links(); ?>
                            </div>
                        </div>
                    </div>
                        <?php else : ?>
                                <article>
                                    <p>Sorry, no posts were found!</p>
                                </article>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="sidebar-blog col-md-3 col-12">
                    <?php echo get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
</div>
        
        <?php
get_footer();

?>