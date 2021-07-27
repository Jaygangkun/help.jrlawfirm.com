<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	get_template_part( 'template-parts/footer' );
}
?>

<?php wp_footer(); ?>

<!-- jrlawfirm.com -->
<!-- Start Of NGage -->
<div id="nGageLH" style="visibility:hidden; display: block; padding: 0; position: fixed; right: 0px; bottom: 0px; z-index: 5000;"></div>
<script type="text/javascript" src="https://messenger.ngageics.com/ilnksrvr.aspx?websiteid=1-25-6-128-160-135-176-30" async="async"></script>
<!-- End Of NGage -->

</body>
</html>
