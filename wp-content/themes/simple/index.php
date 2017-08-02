<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<span><?php bloginfo('description'); ?></span>
	</header>
	<div class="main">
		<?php if(have_posts()) : ?>
		
		<?php else; ?>
			<?php echo wpautop('Sorry, no posts were found.')?>
			<!-- wpautop converts double line breaks to paragraphs -->
		<?php endif; ?>
	</div>
</body>
</html>