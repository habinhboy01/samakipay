<?php
/*

	Template Name: project

*/
get_header(); ?>

	<div class="intro-about">
		<?php 
            $image = get_field('intro-img');
            if( !empty( $image ) ): ?>
                <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="bg-intro2 bg-about">

        	<h1 class="text-about"><?php echo get_field('project'); ?></h1>

        </div>
	</div>

	<div class="container bg-benefits">

		<!-- OUR CUSTOMERS -->

		<h2 class="text-benefits text-project"><?php echo get_field('customers'); ?></h2>

		<div class="row">
			<?php if( have_rows('logo-customers2') ): ?>
	            <?php while( have_rows('logo-customers2') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="col-lg-6 col-md-6 col-12">

		                <img class="img-customers2" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		           
	                </div>

           	    <?php endwhile; ?>
	        <?php endif; ?>
	    </div>

		<div class="row page-project">
			<?php if( have_rows('logo-customers') ): ?>
	            <?php while( have_rows('logo-customers') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                ?>

	                <div class="col-lg-2 col-md-3 col-4">

		                <img class="img-customers" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		           
	                </div>

           	    <?php endwhile; ?>
	        <?php endif; ?>
	    </div>

	
		<!-- OUR PROJECTS -->
	
		<h2 class="text-benefits text-project"><?php echo get_field('intro-project'); ?></h2>

		<div class="row">
			<?php if( have_rows('list-project') ): ?>
	            <?php while( have_rows('list-project') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; 
	                $link = get_sub_field('link');
	                ?>

	                <div class="col-lg-4 col-md-6 col-12">
	                	<div class="list-project">
	                		<a href="<?php echo $link['url'];?>">
		                		<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

		                		<h2><?php echo get_sub_field('title'); ?></h2>
		                	</a>
	               		</div>
	                </div>

           	    <?php endwhile; ?>
	        <?php endif; ?>
	    </div>
		   
	</div>

<?php get_footer(); ?>