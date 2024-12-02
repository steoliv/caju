<?php

get_header();

?>

<div class="container-fluid banner-header">
    <img src="<?php  header_image()?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
</div>


<div class="container-fluid">

    <section class="blog-home">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 blog-list">
                    <div class="container">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <article class="article-loop col-12">
                                <header>
                                    <h2>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    <div class="article-img">
                                        <a href="the_permalink();">
                                            <?php the_post_thumbnail( 'medium'); ?>
                                        </a>
                                    </div>
                                    <div class="article-info">
                                        <p> Postado em <?php echo get_the_date(); ?>  por <?php echo get_the_author_posts_link(); ?></p>
                                        <p> Categories: <?php the_category( '' ); ?></p>
                                        <p> Tags: <?php the_tags( '', ', '); ?></p>
                                    </div>
                                </header>
                                <div class="article-content">
                                    <?php the_excerpt(); ?>
                                </div>
                            </article>
                        <?php endwhile; else : ?>
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