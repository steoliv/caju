<article class="article-loop col-12">
    <header>
        <h2>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <?php if( has_post_thumbnail() ): ?> 
            <div class="article-img">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'medium'); ?>
                </a>
            </div>
        <?php endif; ?>

        <div class="article-info">
            <p> Postado em <?php echo get_the_date(); ?>  por <?php echo get_the_author_posts_link(); ?></p>
            <?php if( has_category()): ?>
                <p> Categories: <?php the_category( '' ); ?></p>
            <?php endif; ?>
            <?php if(has_tag()): ?>
                <p> Tags: <?php the_tags( '', ', '); ?></p>
            <?php endif; ?>
        </div>
    </header>
    <div class="article-content">
        <?php the_excerpt(); ?>
    </div>
</article>