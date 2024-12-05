<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>

        <?php if( has_post_thumbnail() ): ?> 
            <?php the_post_thumbnail( 'large'); ?>
        <?php endif; ?>

        <div class="meta-info">
            <p> 
                Postado em <?php echo get_the_date(); ?>  por <?php echo get_the_author_posts_link(); ?><br>
                <?php if( has_category()): ?>
                    Categories: <?php the_category( '' ); ?><br>
                <?php endif; ?>
                <?php if( has_tag()): ?>
                    Tags: <?php the_tags( '', ', '); ?>
                <?php endif; ?>
                </p>
        </div>
    </header>

    <div class="content-single">
        <?php the_content(); ?>

    </div>
</div>