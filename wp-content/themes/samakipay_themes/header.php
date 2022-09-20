<!DOCTYPE html>
<html>
<head>
	<title>
	    <?php if (is_front_page()) : ?>
	        <?php bloginfo('name') ?>
	    <?php elseif (is_single()) : ?>
	        <?php echo wp_title('', true, ''); ?>
	    <?php else : ?>
	        <?php echo wp_title('', true, ''); ?>
	    <?php endif ?>
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/css/bootstrap.min.css">

	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/vendor/fontawesome-free-5.15.3-web/css/all.min.css">

	 <!-- carousel -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
  	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

  	<!-- library animation -->
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/aos.css">
  	<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory') ?>/images/logo.ico"/>

  	 <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

	<?php wp_head() ?>
</head>
<body>

<!-- menu pc -->
	<div class="main-menu">
		<div class="container">
			<div class="bg-pc">
				<a class="home-url" href="<?php echo home_url(); ?>">
	            	<img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
	        	</a>

	    	    <?php wp_nav_menu (
		            array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>

		       <ul class="brand">
		       		<li class="text-header"><?php echo get_field('text', 'option'); ?></li>

		       		<li>
		       			<?php 
	                    $image = get_field('img', 'option');
		                    if( !empty( $image ) ): ?>
		                        <img class="img-header" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	                	<?php endif; ?>
	            	</li>
		       </ul>
			</div>
		</div>

		<div class="bg-pc2">
			<div class="container">
				<?php wp_nav_menu (
		            array('theme_location' => 'menu-2', 'menu_class' => 'menu-pc2'));?>
			</div>
		</div>
	</div>

<!-- menu mobile -->
	<div class="main-menu-mobile">
		<div class="bg-mobile2">
			<div class="container">
				<div class="bg-mobile">
					<a class="home-url" href="<?php echo home_url(); ?>">
			        	<img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
			    	</a>

			    	<span class="icon-bar"><i class="fas fa-bars"></i></span>       		

			    </div>
		    </div>
		</div>

    	<!-- sub menu -->

	    <div class="menu-mobile">
	    	<ul class="brand">
   				<li class="text-header"><?php echo get_field('text', 'option'); ?></li>

   				<li>
       				<?php 
                    $image = get_field('img', 'option');
	                    if( !empty( $image ) ): ?>
	                        <img class="img-header" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                	<?php endif; ?>
   				</li>
   			</ul>

	    	<div class="container">
		    	<?php wp_nav_menu (
		            array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile2'));?>
		    </div>

		    <div class="bg-sub-mobile">
		    	<div class="container">
		    		<?php wp_nav_menu (
		            	array('theme_location' => 'menu-2', 'menu_class' => 'menu-mobile3'));?>
		    	</div>
		    </div>
	    </div>
	</div>


