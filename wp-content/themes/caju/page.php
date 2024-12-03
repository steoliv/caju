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
                <?php while ( have_posts() ) : the_post(); 
                
                    get_template_part('parts/content', 'page');
                
                endwhile;?>
            </div>
        </div>
    </section>

</main>

<?php

wp_footer();

?>