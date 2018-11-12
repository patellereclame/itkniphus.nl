<?php /* Template Name: Front-page */ ?>

<?php get_header(); ?>

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
</div>

<div class="site-inner">
	<div class="container">
		<div class="row">
			<div class="section-1 col-md-12">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	// End the loop.
	endwhile;
	?>
</div>
				</main><!-- .site-main -->
			</div><!-- .content-area -->
		</div>
	</div>
</div>






<?php get_footer(); ?>
