<?php
/*
Template name: General Template

*/

get_header();

?>

<main class="main">
<div class="container-fluid banner-header">
    <img src="<?php  header_image()?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
</div>

    <section class="general-template">
        <div class="container">
            <div class="row">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="general-template-loop col-md-12">
                        <header>
                            <h1>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h1>
                            </div>
                        </header>
                        <div class="general-template-content">
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

</main>

<?php

wp_footer();

?>