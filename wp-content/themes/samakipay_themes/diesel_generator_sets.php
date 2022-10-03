<?php
/*

	Template Name: Diesel Generator sets

*/
get_header(); ?>
	
	<div class="container">
    	<div class="intro-about">
    		<?php 
                $image = get_field('img-intro-diesel');
                if( !empty( $image ) ): ?>
                    <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
    
            <div class="bg-intro2 bg-about">
    
            	<!--<h1 class="text-about"><?php echo get_field('title-diesel'); ?></h1>-->
    
            </div>
    	</div>
    </div>

	<div class="container">
		<?php 
	        $image = get_field('image-diesel');
	        if( !empty( $image ) ): ?>
	            <img class="image-diesel" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	    <?php endif; ?>
	</div>

	<div class="bg-benefits">
		<div class="container">
			
			<!-- ưu diểm -->

			<h1 class="text-benefits"><?php echo get_field('benefits'); ?></h1>

		    <ul class="list-benefits">
	    		<?php if( have_rows('list-benefits') ): ?>
	            	<?php while( have_rows('list-benefits') ): the_row(); ?>

	            		<li><h2><?php echo get_sub_field('title'); ?></h2></li>

	            		<li><?php echo get_sub_field('text'); ?></li>

	            		<li><?php echo get_sub_field('text2'); ?></li>

	            		<li><?php echo get_sub_field('text3'); ?></li>

	           	    <?php endwhile; ?>
	        	<?php endif; ?>
	    	</ul>

	    	<!-- list ưu diểm -->

	    	<div class="row content-benefits">
	    		<?php if( have_rows('list-benefits2') ): ?>
		            <?php while( have_rows('list-benefits2') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; ?>

		                <div class="col-lg-6 col-12 content-benefits2">
		                	<img class="img-benefits" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"> 			                	
		                	<h2 class="text-benefits2"><?php echo get_sub_field('title'); ?></h2>

		                	<p class="text-benefits3"><?php the_sub_field('content'); ?></p>
		               
		                </div>

	           	    <?php endwhile; ?>
	        	<?php endif; ?>
	    	</div>

	    	<!-- Hệ thống phun nhiên liệu công nghệ Common Rai -->
	    	<div class="text-center">
			    <?php 
			        $image = get_field('img-benefits');
			        if( !empty( $image ) ): ?>
			            <img class="image-diesel2" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			    <?php endif; ?>
			</div>

		    <ul class="list-benefits list-benefits2">
	    		<?php if( have_rows('description-img') ): ?>
	            	<?php while( have_rows('description-img') ): the_row(); ?>

	            		<li><h2><?php echo get_sub_field('title'); ?></h2></li>

	            		<li><?php echo get_sub_field('text'); ?></li>

	            		<li><?php echo get_sub_field('text2'); ?></li>

	            		<li><?php echo get_sub_field('text3'); ?></li>

	           	    <?php endwhile; ?>
	        	<?php endif; ?>
	    	</ul>
			
		</div>
	</div>

	<!-- list sản phẩm -->

	<div class="container bg-benefits">
		<div class="row">

			<?php if( have_rows('product-diesel') ): ?>
	            <?php while( have_rows('product-diesel') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; ?>

	                <div class="col-lg-4 col-md-6 col-12">
	                	<img class="product-diesel" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                	
	                	<ul class="product-diesel2">
	                	    <li><?php echo get_sub_field('text'); ?></li>
	                	    
	                	    <li><?php echo get_sub_field('text2'); ?></li>
	                	</ul>
	                </div>

	         	<?php endwhile; ?>
        	<?php endif; ?>

		</div>
	</div>
	
	<div class="container">
        <div class="about-yotube">
    	    <?php the_field('youtube') ?>
    	</div>
    </div>

<?php get_footer(); ?>