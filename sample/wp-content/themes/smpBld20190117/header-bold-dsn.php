<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<link rel="stylesheet" href="//cdn.jsdelivr.net/modaal/0.3.1/css/modaal.min.css">
<!--	<script src="//cdn.jsdelivr.net/modaal/0.3.1/dist/js/modaal.min.js">-->


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">//dropdownを読み込み</script>
	<script>
		$(function() {
			var dropdown = $('.dropdown');
			$('li', dropdown)
				.mouseover(function(e) {
					$('ul', this).stop().slideDown('fast');
				})
				.mouseout(function(e) {
					$('ul', this).stop().slideUp('fast');
				});
		});
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<header>
			<div class="site-branding-container sw-Header">
<!--				--><?php //get_template_part( 'template-parts/header/site', 'branding' ); ?>

				<h1 class="sw-Header_Title">Bold-Design site</h1>
				<nav class="sw-Nav">

					<ul class="sw-Nav_List">
						<li class="sw-Nav_Item"><a>Studio</a></li>
						<li class="sw-Nav_Item"><a>Works</a></li>
						<li class="sw-Nav_Item"><a>Notes</a></li>
						<li class="sw-Nav_Item"><a>Contact</a></li>
					</ul>

				</nav>
			</div><!-- .layout-wrap -->


		</header><!-- #masthead -->

	<div id="content" class="site-content">
