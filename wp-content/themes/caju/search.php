<?php get_header(); ?>

    <div class="main">
            <div class="container-fluid search">
                    <div class="container"> 
                        
                    <h2> Busca por: <?php echo get_search_query(); ?></h2>
                    <?php 
                        while (have_posts()) : the_post(); 
                    
                        get_template_part('parts/content', 'search');
                    
                    endwhile; ?>


                    <div class="paginacao">
                        <div class="pages new">
                            <?php echo paginate_links(); ?>
                        </div>
                    </div>
            </div>
        </div>
