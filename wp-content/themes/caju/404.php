<?php

get_header();

?>

<div class="container-fluid banner-header">
    <img src="<?php  header_image()?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
</div>


<div class="container-fluid">

    <section class="blog-home">
        <div class="container">
            <div class="error-404">
                <header>
                    <h1>Essa página não pode ser encontrada</h1>
                    <p>Parece que nada foi encontrado neste local. Talvez tente uma pesquisa?</p>

                    <?php get_search_form(); ?>
                </header>

                <div class="recent-posts">
                    <?php the_widget(
                        'WP_Widget_Recent_Posts',
                        array(
                            'title' => 'Postes Recentes',
                            'numberposts' => 5,
                        )
                    );
                    ?>
                </div>

            </div>
      
        </div>
    </section>
        
        <?php
wp_footer();

?>