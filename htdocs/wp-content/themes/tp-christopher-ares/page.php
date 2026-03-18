<?php


get_header();
?>

<h1><?php the_title(); ?></h1>

<?php
if (have_posts()):
    while (have_posts()):
        the_post();
?>

        <article class="tp_article">
            <p>Publié le <?php the_date(); ?> par <?php the_author(); ?> dans la catégorie :
                <?php
                if (the_category() == null) {
                    echo "Aucune catégorie";
                } else {
                    the_category($separator = ', ');
                }
                ?>
            </p>
            <?php the_content(); ?>
        </article>
<?php
    endwhile;
endif;
get_footer();
?>