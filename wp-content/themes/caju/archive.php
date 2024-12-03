<?php

get_header();

?>

<div class="container-fluid banner-header">
    <img src="<?php  header_image()?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
</div>


<div class="container-fluid">

    <section class="archive">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 archive-list">
                    <div class="container">
                        <?php the_archive_title( '<h1 class="archive-title">', '</h1>'); ?>
                        <?php the_archive_description('<div class="archive-description"', '</div>'); ?> 
                        
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

                        get_template_part('parts/content', 'archive');
                            
                         endwhile; ?>
                        
                        <div class="paginacao">
                            <div class="pages new">
                                <?php echo paginate_links(); ?>
                            </div>
                        </div>
                        
                        <?php else : ?>
                                <article>
                                    <p>Sorry, no posts were found!</p>
                                </article>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="sidebar-blog col-md-4 col-12">
                    <?php echo get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
</div>
        
        <?php
wp_footer();

?>