<?php
/**
 * « template part » gabarit categorie-note-de-cours-4w4 permet d'afficher un article «bloc»
 * qui s'intègre dans la liste des cours qu'accède avec category/cours.
 */
$titre = get_the_title();
// Retirer le premier du titre d'article de catégorie note-de-cours-4w4
if (substr($titre, 0, 1) == '0') {
    $titre = substr($titre, 1);
}
?>

<article class="blocflex__article">
    <figure class="blocflex__figure">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail( 'thumbnail' );
        } else {
            get_the_post_thumbnail(1, 'thumbnail' );
        }
        ?>
    </figure>
    <?php get_post_thumbnail_id(); ?>
    <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>

<?php
// the_excerpt() // echo du résumé post
// the_content() // echo le contenu complet du post
?>