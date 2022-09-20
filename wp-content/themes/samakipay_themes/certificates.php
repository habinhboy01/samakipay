<?php

/*

	Template Name: certificates page

*/

get_header(); ?>

	<div class="intro-about">
		<?php 
            $image = get_field('intro-certificates');
            if( !empty( $image ) ): ?>
                <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="bg-intro2 bg-about">

        	<h1 class="text-about"><?php echo get_field('certificates'); ?></h1>

        </div>
	</div>

	<div class="container bg-certificates">
		<div class="row">
			<?php if( have_rows('list-certificates') ): ?>
	            <?php while( have_rows('list-certificates') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="col-lg-4 col-md-6 col-12">
	                	<img class="img-certificates" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"> 
	                </div>

	             <?php endwhile; ?>
        	<?php endif; ?>

		</div>
	</div>

<?php get_footer(); ?>