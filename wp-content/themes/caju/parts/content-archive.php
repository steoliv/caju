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