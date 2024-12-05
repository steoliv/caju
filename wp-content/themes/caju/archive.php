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
                        
                        if (  have_posts() ) : while (  have_posts() ) :  the_post(); 

                            get_template_part('parts/content' , 'archive');

                        endwhile; 
                        ?>
                        
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