<?php /* Template Name: standart-page */ ?>

<?php get_header(); ?>

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
