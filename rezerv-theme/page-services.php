<?php
/*
Template Name: Services Page
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

				<div class="row services-header">
					<div class="col-md-8">
						<?php

							$current_page = get_permalink();

							switch ( $current_page ) {
								case 'http://rezerv.pro/uslugi/uslugi-gruzchikov/':
									echo "<div class='content-header loaders'></div>";
									break;
								case 'http://rezerv.pro/uslugi/kvartirnyj-pereezd/':
									echo "<div class='content-header flat-moving'></div>";
									break;
								case 'http://rezerv.pro/uslugi/ofisnyj-pereezd/':
									echo "<div class='content-header office-moving'></div>";
									break;
								case 'http://rezerv.pro/uslugi/gruzoperevozki/':
									echo "<div class='content-header cargo-transportation'></div>";
									break;
								case 'http://rezerv.pro/uslugi/takelazhnye-raboty/':
									echo "<div class='content-header rigging'></div>";
									break;
							}

						?>
					</div>
					
					<div class="col-md-4 padding-null">
						<div class="content-header-descr">
							<div class="post-meta-wrapper">
								<?php the_meta(); ?>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								endwhile;
							endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>