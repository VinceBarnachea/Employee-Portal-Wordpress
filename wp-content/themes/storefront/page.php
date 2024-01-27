<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>

	<div class="page w-full">
		<?php
			if (is_front_page()) {
				get_template_part('page-parts/login-page');
			}
			if (is_page('admin-dashboard')) {
				get_template_part('page-parts/admin-dashboard');
			}
			if (is_page('user-dashboard')) {
				get_template_part('page-parts/user-dashboard');
			}
		?>
	</div>

<?php
do_action( 'storefront_sidebar' );
get_footer();
