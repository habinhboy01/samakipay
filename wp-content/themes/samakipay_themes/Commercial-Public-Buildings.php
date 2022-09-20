<?php
/*

	Template Name: Commercial & Public Buildings

*/
get_header(); ?>
	
	<div class="intro-about">
		<?php 
            $image = get_field('img-title');
            if( !empty( $image ) ): ?>
                <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="bg-intro2 bg-about">

        	<h1 class="text-about"><?php echo get_field('name-project'); ?></h1>

        </div>
	</div>

	
	<div class="container">

		<!-- danh sách công trình -->

		<div class="list-construction2">
			<div class="row">
				<?php if( have_rows('list-construction') ): ?>
		            <?php while( have_rows('list-construction') ): the_row(); 
		            	$image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; ?>

		            	<div class="col-lg-4 col-md-6 col-12">
		            		
		            		<img class="img-construction" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

			            	<ul class="list-construction">
				                <li class="text-construction"><?php echo get_sub_field('name'); ?></li>

				                <li>
				                	<ul>
					                	<?php if( have_rows('list-data') ): ?>
					            			<?php while( have_rows('list-data') ): the_row(); ?>

					            				<li><?php echo get_sub_field('text'); ?></li>

					            			<?php endwhile; ?>
					        			<?php endif; ?>
					        		</ul>
				                </li>
				            </ul>
					      
				        </div>

		            <?php endwhile; ?>
		        <?php endif; ?>
		    </div>
		</div>
	</div>


<?php get_footer(); ?>