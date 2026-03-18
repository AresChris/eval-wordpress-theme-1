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
        $category = " Catégorie : " . the_category();
        echo 'Catégorie : ' . the_category();
    }
?>
</div>

</body>

</html>