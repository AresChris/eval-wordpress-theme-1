<?php

get_header();

?>
<h1><?php the_title(); ?></h1>
<?php
the_content();
?>
<div class="footer_article">
    <p>Catégorie : <?php the_category($separator = ', '); ?></p>
</div>
<?php
get_footer();
