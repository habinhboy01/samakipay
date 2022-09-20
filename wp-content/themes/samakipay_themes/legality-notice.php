<?php
/*
	Template Name: Legality Notice 
*/
get_header(); ?>
	
	<div class="intro-about">
		<?php 
            $image = get_field('img-intro');
            if( !empty( $image ) ): ?>
                <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="bg-intro2 bg-about">

        	<h1 class="text-about"><?php echo get_field('title'); ?></h1>

        </div>
	</div>

	<div class="container privacy-policy">

		<?php if( have_rows('content-page') ): ?>
	        <?php while( have_rows('content-page') ): the_row(); ?>

	            <h2><?php echo get_sub_field('title'); ?></h2>

				<?php if( have_rows('text') ): ?>
			        <?php while( have_rows('text') ): the_row(); ?>

	            		<p><?php the_sub_field('content'); ?></p>

	            	<?php endwhile; ?>
				<?php endif; ?>

	   	    <?php endwhile; ?>
		<?php endif; ?>
	</div>


<?php get_footer(); ?>