<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

<footer id="colophon" class="site-footer">

    <?php if ( has_nav_menu( 'footer' ) ) : ?>
    <nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">


    </nav><!-- .footer-navigation -->
    <?php endif; ?>
    <div class="site-info">


        <?php
			// if ( function_exists( 'the_privacy_policy_link' ) ) {
			// 	the_privacy_policy_link( '<div class="privacy-policy">', '</div>' );
			// }
			?>



    </div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>