<?php get_header(); ?>

<div id="primary">

    <div class="main">
        <div class="container-fluid">
            <div class="container"> 

                <?php 
                    while (have_posts()) : the_post(); 

                    get_template_part('parts/content', 'single');

                ?>
                    <div class="paginacao-single">
                        <div class="pages previous">
                            <?php previous_post_link(); ?>
                        </div>
                        <div class="pages next">
                            <?php next_post_link(); ?>
                        </div>

                    </div>
                <?php endwhile; ?>


                <div class="comments">
                    <?php if(comments_open()){
                        comments_template();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>

<?php

get_footer();

?>