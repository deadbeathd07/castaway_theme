<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta charset="<?php bloginfo("charset"); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
	<title>Castaway</title>
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="container">
				<div class="header__inner">
					<h1 class="logo">
						<?php the_custom_logo(); ?>
					</h1>
					<?php wp_nav_menu([
						"theme_location" => "header-menu",
					]) ?>
				</div>
			</div>
		</header>