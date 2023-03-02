<?php
/**
 * « template part » gabarit categorie-cours permet d'afficher un article
 */
$titre = get_the_title();
$sigle = substr($titre, 0, 7);
$grand_titre = substr($titre, 7, -5);
$duree = "90";
?>

<article class="blocflex__article">
    <h5><a href="<?php the_permalink(); ?>"> <?= $sigle; ?></a></h5>
    <h6><?= $grand_titre; ?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <h6><?= $duree; ?></h6>
</article>