<?php
/*
Template name: General Template

*/

get_header(); 

?>

<main class="main">
    <section class="page-template">
        <div class="container">
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="page-template-loop col-md-12">
                        <header>
                            <h1>
                                    <?php the_title(); ?>
                            </h1>
                            </div>
                        </header>
                        <div class="page-template-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile;?>
            </div>
        </div>
    </section>

</main>

<?php

wp_footer();

?>