<?php
/*

	Template Name: Railway

*/

get_header(); ?>
	
	<div class="intro-about">
		<?php 
            $image = get_field('img-intro');
            if( !empty( $image ) ): ?>
                <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="bg-intro2 bg-about">

        	<h1 class="text-about"><?php echo get_field('title-railway'); ?></h1>

        </div>
	</div>

	<div class="container page-project">
		<h2 class="text-about2"><?php echo get_field('title-railway2'); ?></h2>

		<!-- High-Speed-Trains and Locomotives -->

		<div class="row">
			
			<h2 class="text-benefits"><?php echo get_field('locomotives'); ?></h2>

			<?php if( have_rows('list-locomotives') ): ?>
                <?php while( have_rows('list-locomotives') ): the_row(); 
                    $image = get_sub_field('img');
                    $picture = $image['sizes']['thumbnail']; ?>

                    <div class="col-lg-3 col-md-6 col-12">
	                    <div class="content-railway">

	                        <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

	                        <div class="content-railway2">
	                        	<h2><?php echo get_sub_field('name'); ?></h2>

	                         	<p><?php the_sub_field('text'); ?></p>
	                        </div>

	                    </div>
	                </div>

                <?php endwhile; ?>
            <?php endif; ?>
			
		</div>


		<!-- Railcars -->

		<div class="row">
			
			<h2 class="text-benefits"><?php echo get_field('railcars'); ?></h2>

			<?php if( have_rows('list-railcars') ): ?>
                <?php while( have_rows('list-railcars') ): the_row(); 
                    $image = get_sub_field('img');
                    $picture = $image['sizes']['thumbnail']; ?>

                    <div class="col-lg-3 col-md-6 col-12">
	                    <div class="content-railway">

	                        <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

	                        <div class="content-railway2">
	                        	<h2><?php echo get_sub_field('name'); ?></h2>

	                         	<p><?php the_sub_field('text'); ?></p>
	                        </div>

	                    </div>
	                </div>

                <?php endwhile; ?>
            <?php endif; ?>
			
		</div>
	</div>

	<!-- list tiện ích -->

	<div class="bg-railway">
		<div class="container">
			<div class="row">
				<?php if( have_rows('list-utility') ): ?>
		            <?php while( have_rows('list-utility') ): the_row(); 
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
		</div>
	</div>

	<div class="container">
		<?php 
            $image = get_field('img-railway');
            if( !empty( $image ) ): ?>
                <img class="img-tracks" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="content-railway3">
        	<h2><?php echo get_field('title_on_tracks'); ?></h2>

        	<p><?php the_field('on_tracks'); ?></p>
        </div>
	</div>

	<!-- list tiện ích 2 -->

	<div class="bg-railway bg-railway2">
		<div class="container">
			<div class="row">
				<?php if( have_rows('list-utility2') ): ?>
		            <?php while( have_rows('list-utility2') ): the_row(); 
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
		</div>
	</div>

<?php get_footer(); ?>