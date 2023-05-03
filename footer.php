
<footer id="footer" class="footer">
    <div class="wrapper">

    <!-- footer top -->
    <div class="footer-top">
        <div class="footer__item footer__item--brand">
            <?php dynamic_sidebar( 'footer_01' ); ?>
        </div>
        <div class="footer__item">
            <?php dynamic_sidebar( 'footer_02' ); ?>
        </div>
        <div class="footer__item">
            <?php dynamic_sidebar( 'footer_03' ); ?>
        </div>
        <div class="footer__item">
            <?php dynamic_sidebar( 'footer_04' ); ?>
        </div>
        <div class="footer__item footer__item--social">
            <span class="social-title">Síguenos</span>
            <?php get_template_part('parts/social-links'); ?>
        </div>
    </div>
    <!-- footer bottom -->
    <div class="footer-bottom">
            <p><?php echo get_option( 'footer_copyright' ); ?></p>
    </div>
  
    </div>
</footer>


<?php wp_footer(); ?>


</body>

</html>