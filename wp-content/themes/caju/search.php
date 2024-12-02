<?php get_header(); ?>

    <div class="main">
            <div class="container-fluid search">
                    <div class="container"> 

                    <?php 
                        while (have_posts()) : the_post(); 
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header>
                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="img-destaque">
                                <?php the_post_thumbnail( 'medium'); ?>

                            </div>
                            <div class="meta-info">
                                <p> Postado em <?php echo get_the_date(); ?>  por <?php echo get_the_author_posts_link(); ?></p>
                                <p> Categories: <?php the_category( '' ); ?></p>
                                <p> Tags: <?php the_tags( '', ', '); ?></p>
                            </div>

                        </header>

                        <div class="content">
                            <?php the_excerpt(); ?>

                        </div>
                    </article>
                    <?php endwhile; ?>
            </div>
        </div>
