<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()."/lib/flexbox/flexboxgrid.min.css"; ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="page-wrapper" class="hfeed">
		<header class="page-header wrap" role="banner">

			<div class="row">
				<div class="col-sm-12 col-lg-9">
					<a class="branding-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'wmfblog' ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri()."/images/brand.png"; ?>">
					</a>
					<div class="branding-description"><?php bloginfo( 'description' ); ?></div>
				</div>
				<div class="col-sm-12 col-lg-3">
					<?php get_search_form(); ?>
				</div>
			</div>
			<nav class="main-menu" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
		</header>
		<div class="page-main">