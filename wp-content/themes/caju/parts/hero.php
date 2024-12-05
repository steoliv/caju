<?php //customizer hero

$hero_title = get_theme_mod( 'set_hero_title', 'Please, type some title');
$hero_subtitle = get_theme_mod( 'set_hero_subtitle', 'Please, type some subtitle');
$hero_button_link = get_theme_mod('set_hero_button_link', '#');
$hero_button_text = get_theme_mod('set_hero_button', 'Click me');
$hero_height = get_theme_mod( 'set_hero_height', 400);
$hero_background = wp_get_attachment_url( get_theme_mod( 'set_hero_background'));

 if($hero_background): ?>
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
<?php endif;?>
