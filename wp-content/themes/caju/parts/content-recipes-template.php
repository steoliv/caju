    <article class="recipes-loop col-12">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'large'); ?>
        </a>
        <h3>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
            
        <div class="meta-info">
            <p>
                Postado em <span> <?php echo get_the_date(); ?> </span>
            
            </p>

        </div>
        <div class="archive-content">
            <?php the_excerpt(); ?>
        </div>
    </article>
