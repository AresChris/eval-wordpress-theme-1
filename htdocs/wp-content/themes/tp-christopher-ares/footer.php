</main>

<div class="footer">
    <p><a href="http://localhost/a-propos/">A propos</a>
    <p>
    <footer>Copyright <?php echo date('Y'); ?> DWWM2503 CHRISTOPHER ARES</footer>
</div>

<?php wp_footer(); ?>
<div class="category_footer_single">
    <?php
    if(is_single()){
        ?>
        <p>Catégorie : <?= the_category($separator =', ')?></p>
        <?php
    }
?>
</div>

</body>

</html>