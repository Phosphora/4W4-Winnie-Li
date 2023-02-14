<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon 4W4</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="site_entete">
        <section class="entete_nav">
            <?php the_custom_logo(); ?>
            <?php wp_nav_menu( array(
                "menu" => "entete",
                "container" => "nav",
                "container_class" => "menu_entete"
            ) ); ?>
        </section>
        <h1><a class="site_titre" href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></a></h1>
        <h2 class="site_description"><?= bloginfo('description'); ?></h2>
    </header>