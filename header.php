<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="copyright" content="">
	
	<title><?php echo wp_get_document_title(); ?></title>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="shortcut icon" href="<?php bloginfo(template_url); ?>/img/favicon.ico" type="image/x-icon">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="page-wrapper">
		<header id="header">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<a href="<?php echo home_url(); ?>" class="navbar-brand">
							<img src="<?php bloginfo(template_url); ?>/img/logo_rgb-w200.png" class="img-responsive">
						</a>
						
						<a href="<?php echo home_url(); ?>" class="top-home-link">
							<i class="fa fa-home fa-2x"></i>
						</a>
					</div>

					<?php
						wp_nav_menu( array(
							'menu'              => 'top-nav',
							'theme_location'    => 'Top Navigation',
							'depth'             => 0,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
					?>
				</div>
			</nav>
		</header>