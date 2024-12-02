<?php get_header(); ?>

    <div class="main">
            <div class="container-fluid search">
                    <div class="container"> 
                        
                    <h2> Busca por: <?php echo get_search_query(); ?></h2>
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
                            <?php if( 'post' == get_post_type()): ?>
                                <div class="meta-info">
                                    <p> Postado em <?php echo get_the_date(); ?>  por <?php echo get_the_author_posts_link(); ?></p>
                                    <p> Categories: <?php the_category( '' ); ?></p>
                                    <p> Tags: <?php the_tags( '', ', '); ?></p>
                                </div>
                            <?php endif; ?>
                        </header>

                        <div class="content">
                            <?php the_excerpt(); ?>

                        </div>
                    </article>
                    <?php endwhile; ?>


                    <div class="paginacao">
                        <div class="pages new">
                            <?php echo paginate_links(); ?>
                        </div>
                    </div>
            </div>
        </div>
