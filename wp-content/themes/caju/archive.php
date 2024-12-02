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
                        
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <article class="archive-loop col-12">
                                <header>
                                    <h3>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <div class="archive-img">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail( 'medium'); ?>
                                        </a>
                                    </div>
                                    <div class="archive-info">
                                        <p> Postado em <?php echo get_the_date(); ?>  por <?php echo get_the_author_posts_link(); ?></p>
                                        <p> Categorias: <?php the_category( '' ); ?></p>
                                        <p> Tags: <?php the_tags( '', ', '); ?></p>
                                    </div>
                                </header>
                                <div class="archive-content">
                                    <?php the_excerpt(); ?>
                                </div>
                            </article>
                        <?php endwhile; ?>
                        
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