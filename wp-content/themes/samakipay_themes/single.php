<?php get_header(); ?>
	
	<div class="bg-single">
		<?php the_post_thumbnail('full'); ?>
	</div>

	<div class="container bg-railway2">
		<?php the_category(); ?>

		<h1 class="text-single"><?php the_title(); ?></h1>

		<p class="date-publish">Posted on <?php echo get_the_date(); ?></p>

		<div class="content-single"><?php the_content(); ?></div>
	</div>


<?php get_footer(); ?>