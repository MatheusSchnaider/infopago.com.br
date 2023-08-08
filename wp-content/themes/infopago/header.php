<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php wp_title(' - ', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta name="theme-color" content="#2b82bf"> -->
	<meta charset="<?php bloginfo('charset'); ?>">

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.png" type="image/x-icon">
	<link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.png" type="image/x-icon">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.min.css">
	<?php wp_head(); ?>

</head>

<body>
	<nav id="navbar" class="">
		<div class="container">
			<div class="row py-3">
				<div class="col-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logotipo.png" alt="Revista Nossa">
				</div>
				<div class="col-6">
					<div class="row">
						<div class="col-md-auto">
							<?php wp_nav_menu(array('menu' => 'Menu 1')); ?>
						</div>
						<div class="col-md-auto fale-conosco mr-2">
							<a href="">
								FALE CONOSCO
							</a>
						</div>
						<div class="col-md-auto area-cliente">
							<a href="">
								ÁREA DO CLIENTE
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>