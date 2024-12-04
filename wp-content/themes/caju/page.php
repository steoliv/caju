<?php
/*
Template name: General Template

*/

get_header(); 



//customizer hero

$hero_title = get_theme_mod( 'set_hero_title', 'Please, type some title');
$hero_subtitle = get_theme_mod( 'set_hero_subtitle', 'Please, type some subtitle');
$hero_button_link = get_theme_mod('set_hero_button_link', '#');
$hero_button_text = get_theme_mod('set_hero_button', 'Click me');
$hero_height = get_theme_mod( 'set_hero_height', 400);
$hero_background = wp_get_attachment_url( get_theme_mod( 'set_hero_background'));

?>

<main class="main">
    <div class="container-fluid page-template">
        <section class="page-hero" style="background-image: url('<?php echo $hero_background ?>');">
            <div class="overlay" style="min-height:<?php echo $hero_height ?>px">
                <div class="container">
                    <div class="hero-content">
                        <h1><?php echo $hero_title ?></h1>
                        <p><?php echo $hero_subtitle ?></p>
                        <a href="<?php echo $hero_button_link ?>"><?php echo $hero_button_text ?></a>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <section class="content-page">
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