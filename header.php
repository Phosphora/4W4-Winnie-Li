<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon 4W4</title>
    <?php wp_head(); ?>
</head>
<body class="custom-background site <?php echo(is_front_page() ? "no-aside" : "") ?>">
    <header class="site__entete">
        <section class="entete__nav">
        <?php the_custom_logo(); ?>
        <div class="menu__recherche">
            <input type="checkbox" id="chkBurger">
            <?php wp_nav_menu( array(
                "menu" => "entete",
                "container" => "nav",
                "container_class" => "menu__entete"
            ) ); ?>
            <?= get_search_form() ?>
            <label class="burger" for="chkBurger">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
            </label> 
        </div>
        </section>
        <h1 class="site__titre"><a  href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></a></h1>
        <h2 class="site__description"><?= bloginfo('description'); ?></h2>
    </header>

    <?php
    if (!is_front_page()) {
        get_template_part("template-parts/aside");
    }
    ?>