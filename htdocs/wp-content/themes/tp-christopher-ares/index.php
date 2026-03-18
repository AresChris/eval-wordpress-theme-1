<?php

get_header();

if(have_posts()):
    while(have_posts()):
        the_post();
?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    
    <div class="legende_article">
    <p>Publié le <?php the_date(); ?> par <?php the_author(); ?> dans la catégorie : <?php the_category($separator =', '); ?></p>
    </div>
    <?php the_post_thumbnail('thumbnail'); ?>
    <article class="montheme_article">
        <article>
           <?php the_excerpt(); ?>
        </article>
<?php
    endwhile;
endif;
get_footer();

