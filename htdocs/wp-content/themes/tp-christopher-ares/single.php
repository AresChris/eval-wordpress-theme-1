<?php

get_header();
if (have_posts()):
    while (have_posts()):
        the_post();
?>

    <div class="article_content">
        <article class="tp_article">
            <h2><?php the_title(); ?></h2>
            <p>Publié le <?php the_date(); ?> par <?php the_author(); ?> dans la catégorie : <?php the_category($separator = ', '); ?></p>
            <?php the_content(); ?>
        </article>
        <div class="footer_article">
            <p>Catégorie : <?php the_category(); ?></p>
        </div>
    </div>

<?php
    endwhile;
endif;
get_footer();
?>