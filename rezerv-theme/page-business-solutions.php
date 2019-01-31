<?php
/*
Template Name: Business Solutions Page
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
				
				<div class="row">
					<div class="col-md-12">
					
						<?php
							if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								endwhile;
							endif;
						?>

						<div class="unfolding-blocks-wrapper">
							<?php
								$accordion_data = array(
									'category_name' => 'Accordion',
									'nopaging' => true,
									'orderby' => "91,93,95"
								);
								
								$posts = get_posts( $accordion_data );
								
								foreach( $posts as $post ) {
									setup_postdata( $post );
							?>

								
									<div class="title-for-block"> <?php the_title(); ?> </div>
									<div class="unfolding-block"> <?php the_content(); ?> </div>
								

							<?php
								}
								wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>