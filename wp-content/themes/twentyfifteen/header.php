<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /css/bootstrap.min.css">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<div id="page" class="hfeed site">
	<nav class="navbar navbar-expand-md navbar-light" role="navigation">
	  <div class="container">


		<!-- Brand and toggle get grouped for better mobile display -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		</div>

			<?php
			wp_nav_menu( array(
				'theme_location'    => 'primary',
				'depth'             => 2,
				'ul class'					=> 'justify-content-end',
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'bs-example-navbar-collapse-1',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback'
			) );
			?>
		</div>
	</nav>

<body <?php body_class(); ?> >
	<div class="logo-content">
			<div class="logo-header">
					<img src="<?php echo get_stylesheet_directory_uri();?>/images/logo-kniphus.png" width="300px" height="auto">
					<p class="line-up">
							Oudebildtdijk 620 <span>.</span> Sint Jacobiparochie <span>.</span> 06 - 24127946
					</p>
			</div>
	</div>

	<div class="header">
		<div class="container">
				<div class="row">



					 <div class="header-title col-md-12">
						<h1>Welkom bij It kniphús</h1>

						<a class="button" href="tel:0624127946">Afspraak maken</a>
				</div>
		</div>
	</div>
	</div>


	<div id="content" class="site-content">
