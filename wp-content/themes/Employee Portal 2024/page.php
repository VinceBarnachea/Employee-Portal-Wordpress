<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>


<div class="page w-full">
		<?php

			if (is_front_page()) {
				get_template_part('page-parts/login-page');
			}
			if (is_page('dashboard')) {
				get_template_part('page-parts/dashboard');
			}
			// if (is_page('user-dashboard')) {
			// 	get_template_part('page-parts/user-dashboard');
			// }
			// if (is_page('logout')) {
			// 	get_template_part('controllers/logout');
			// }
		?>
	</div>


<?php get_footer(); ?>
