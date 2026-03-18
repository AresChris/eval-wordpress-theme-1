<?php

get_header();
if(have_posts()):
    while(have_posts()):
        the_post();
?>

<article class="tp_article">
    <p>Publié le <?php get_the_date(); ?> par <?php the_author(); ?> dans la catégorie : <?php the_category($separator =', '); ?></p>
    <?php the_content(); ?>
</article>
<?php
    endwhile;
endif;
get_footer();
?>
