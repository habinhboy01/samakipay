<?php
/*

	Template Name: Rail

*/
get_header(); ?>
	
	<div class="container">
    	<div class="intro-about">
    		<?php 
                $image = get_field('img-title');
                if( !empty( $image ) ): ?>
                    <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
    
            <div class="bg-intro2 bg-about">
    
            	<!-- <h1 class="text-about"><?php echo get_field('name-project'); ?></h1> -->
    
            </div>
    	</div>
    </div>

	
	<div class="container">
	    
	    <div class="row list-construction3">
	        <?php if (have_rows('list-img')) : ?>
	            <?php while (have_rows('list-img')) : the_row();
	                $image = get_sub_field('img');
                	$picture = $image['sizes']['thumbnail']; 
	            ?>
	                <div class="col-lg-4 col-md-6 col-12">
					    <img class="img-construction" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                </div>

	    		<?php endwhile; ?>
			<?php endif; ?>
	    </div>

		<!-- danh sách công trình -->

		<div class="list-construction2">
		    
			<div class="list-construction">
		        <?php the_field('list-youtube') ?>
		    </div>
		    
		</div>
	</div>


<?php get_footer(); ?>