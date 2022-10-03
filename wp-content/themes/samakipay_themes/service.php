<?php
/*

	Template Name: Service

*/

get_header(); ?>
    
    <div class="container">
    	<div class="intro-about">
    		<?php 
                $image = get_field('img-intro');
                if( !empty( $image ) ): ?>
                    <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
    
            <div class="bg-intro2 bg-about">
    
            	<!--<h1 class="text-about"><?php echo get_field('title-service'); ?></h1>-->
    
            </div>
    	</div>
    </div>

	<div class="container bg-railway2">
		<div class="row">

			<div class="col-lg-6 col-md-6 col-12">
          		<div class="content-service2">
	            	<h2 class="text-service"><?php echo get_field('title-hotline'); ?></h2>

	            	<div class="content-service">
		            	<?php 
				            $image = get_field('img-icon');
				            if( !empty( $image ) ): ?>
				                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				        <?php endif; ?>

	            		<a href="tel:+84 91 247 6 247"><?php echo get_field('phone'); ?></a>
	            	</div>
	            </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
            	<?php 
		            $image = get_field('img-hotline');
		            if( !empty( $image ) ): ?>
		                <img class="img-service" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		        <?php endif; ?>
            </div>

		</div>
	</div>


	<div class="container bg-railway2">
		<div class="row">
			<?php if( have_rows('list-service') ): ?>
	            <?php while( have_rows('list-service') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; ?>

	                <div class="col-lg-6 col-12 content-service3">

	                	<h2 class="text-benefits"><?php echo get_sub_field('title'); ?></h2>

	                	<p class="text-benefits3"><?php the_sub_field('content'); ?></p>

	                </div>

	                <div class="col-lg-6 col-12 content-service3">
	                	<img class="img-service" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                </div>

	        	<?php endwhile; ?>
	        <?php endif; ?>
		</div>


		<div class="content-service4">
			<?php if( have_rows('main_fuction') ): ?>
	            <?php while( have_rows('main_fuction') ): the_row(); ?>

	            	<h2 class="text-benefits"><?php echo get_sub_field('title'); ?></h2>

	              	<p class="text-service2"><?php the_sub_field('content'); ?></p>

	        	<?php endwhile; ?>
	        <?php endif; ?>
		</div>


		<?php 
            $image = get_field('product-portfolio');
            if( !empty( $image ) ): ?>
                <img class="img-service content-service3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>


        <div class="row">
			<?php if( have_rows('list-service2') ): ?>
	            <?php while( have_rows('list-service2') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; ?>

	                <div class="col-lg-6 col-12 content-service3">

	                	<h2 class="text-benefits"><?php echo get_sub_field('title'); ?></h2>

	                	<p class="text-benefits3"><?php the_sub_field('content'); ?></p>

	                </div>

	                <div class="col-lg-6 col-12 content-service3">
	                	<img class="img-service" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                </div>

	        	<?php endwhile; ?>
	        <?php endif; ?>
		</div>
		
		
		<div class="list-construction2">
		    
		    <div class="list-construction">
		        <?php the_field('list-youtube') ?>
		    </div>
		    
		</div>
	</div>




<?php get_footer(); ?>