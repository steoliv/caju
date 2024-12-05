<article>
    
        <h3>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>

        <?php if( has_post_thumbnail() ): ?> 
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'medium'); ?>
            </a>
            <?php endif; ?>
            
        <p> Postado em <?php echo get_the_date(); ?></p>
        <?php if( has_category()): ?>
            <p>Categorias:<?php the_category( '' ); ?></p>
        <?php endif; ?>
            
        <div class="meta-info">
            <?php echo the_excerpt(); ?>
        </div>
</article>