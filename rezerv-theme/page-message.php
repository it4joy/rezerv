<?php
/*
Template Name: Page Message
*/

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="sidebar-wrapper">
				<?php get_sidebar(); ?>
			</div>
		</div>
		
		<div class="col-md-9">
			<div class="content-wrapper">
				<h1> <?php the_title(); ?> </h1>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						endwhile;
					endif;
				?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>