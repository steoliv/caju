<?php

get_header();

?>


<section class="blog-home">
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="article-loop col-md-3">
                    <header>
                        <h2>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
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
</section>

<?php
wp_footer();