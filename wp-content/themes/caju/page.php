<?php
/*
Template name: General Template

*/

get_header(); 


?>

<main class="main">
    <div class="container-fluid page-template">
        <?php get_template_part('parts/hero'); ?>
        
    </div>
    <section class="content-page">
        <div class="container">
                <?php while ( have_posts() ) : the_post(); 
                
                    get_template_part('parts/content', 'page');
                
                endwhile;?>
        </div>
    </section>
</main>

<?php

get_footer();

?>