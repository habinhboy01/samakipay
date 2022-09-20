<?php
/*

Template Name: Home page

*/

get_header(); ?>

	<div class="owl-carousel owl-theme carousel_1">

	    <?php if( have_rows('intro-news') ): ?>
            <?php while( have_rows('intro-news') ): the_row(); 
                $image = get_sub_field('img');
                $picture = $image['sizes']['thumbnail']; 
                $link = get_sub_field('link');
                ?>

            	<div class="item">
            		<div class="bg-intro">
		        		<div class="img-intro">
		    				<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">           			
		    			</div>
				
						<div class="bg-intro2">
							<div class="content-intro">
								<h1 class="text-intro">
									<?php echo get_sub_field('title'); ?>
				                </h1>

			                	<p class="text-intro2"><?php the_sub_field('content'); ?></p>

			                	<ul class="learn-more-intro">
			                		<li>
			                			<a class="see-more" href="<?php echo $link['url'];?>"><?php echo get_sub_field('text-button'); ?></a>           			
			                		</li>

			                		<li class="icon-intro">
			                			<span><i class="fas fa-chevron-right"></i></span>
			                		</li>
			                	</ul>
			                </div>
				        </div>
				    </div>
			    </div>

            <?php endwhile; ?>
        <?php endif; ?>
	</div>

	<!-- PIONEERING SUSTAINABLE POWER THAT MATTERS -->

	<div class="container">
		<div class="content-home">
			<h1 class="text-home"><?php echo get_field('title-home'); ?></h1>

			<p class="text-home2"><?php the_field('content-home'); ?></p>
		</div>
	</div>

	<!-- lấy toàn bộ danh mục sản phẩm post -->

	<div class="container content-home">
		<div class="row">
			<?php if( have_rows('list-category-news') ): ?>
	            <?php while( have_rows('list-category-news') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail'];
	                $link = get_sub_field('link');
	                ?>

		            <div class="col-lg-3 col-md-6 col-12">
	                	<div class="content-category-home">
		                    <a class="img-category-home" href="<?php echo $link['url'];?>">
		                    	<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
		                    </a>

	                    	<a class="title-category-home" href="<?php echo $link['url'];?>">

	                    		<p><?php echo get_sub_field('title') ;?></p>

	                    		<i class="fas fa-chevron-right"></i>  			
	                    	</a>
	  
		                </div>               
	                </div>

	            <?php endwhile; ?>
	        <?php endif; ?>
		</div>
	</div>

	<!-- danh sách tiện ích -->

	<div class="container bg-utility">
		<div class="row">
			<?php if( have_rows('list-utility') ): ?>
                <?php while( have_rows('list-utility') ): the_row(); 
                    $image = get_sub_field('img');
                    $picture = $image['sizes']['thumbnail']; 
                    ?>

                    <div class="col-lg-4 col-12">
	                    <ul class="list-utility">
	                    	<li>
	                    		<img class="img-utility" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                    	</li>

	                    	<li class="content-utility">
	                    		<h2><?php echo get_sub_field('title'); ?></h2>

	                    		<p><?php the_sub_field('content'); ?></p>
	                    	</li>
	                    </ul>
	                </div>

                <?php endwhile; ?>
            <?php endif; ?>
		</div>
	</div>

	<!-- project -->

	<div class="bg-project">
		<div class="container">
			<div class="content-project">
				<h1><?php echo get_field('projects'); ?></h1>
			</div>

			<div class="owl-carousel owl-theme carousel_2 bg-project2">

			    <?php if( have_rows('list-projcets') ): ?>
		            <?php while( have_rows('list-projcets') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; 
		                $link = get_sub_field('link');
		                ?>

		            	<div class="item">

		            		<div class="content-project2">
		            			<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"> 
		            		</div>

		            		<!-- nội dung -->

	            			<div class="content-project3">              

	            				<a class="text-home3" href="<?php echo $link['url'];?>"><?php echo get_sub_field('title'); ?></a> 

		                    </div>
					    </div>

		            <?php endwhile; ?>
		        <?php endif; ?>
			</div>
		</div>
		
		<!--partner-->
		
		<div class="container">
			<div class="content-project">
				<h1><?php echo get_field('partner'); ?></h1>
			</div>

			<div class="owl-carousel owl-theme carousel_3 bg-project2">

			    <?php if( have_rows('list-partner-home') ): ?>
		            <?php while( have_rows('list-partner-home') ): the_row(); 
		                $image = get_sub_field('img'); 
		                $picture = $image['sizes']['thumbnail']; ?>

		            	<div class="item">

		            		<div class="content-partner">
		            			<img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>"> 
		            		</div>

					    </div>

		            <?php endwhile; ?>
		        <?php endif; ?>
			</div>
		</div>
	</div>
	

	<!-- contact trang home -->

	<div class="bg-contact-home">
		<div class="container">
			<h2 class="text-home6"><?php echo get_field('sign-up'); ?></h2>

			<p class="text-home6 text-home7"><?php the_field('description-signup'); ?></p>

			<?php echo do_shortcode( '[contact-form-7 id="104" title="Contact form 1"]' ); ?>
		</div>
	</div>

	<!-- connect with us -->

	<div class="container bg-connect">
		<h1 class="text-home8"><?php echo get_field('connect'); ?></h1>

		<div class="row">
			<?php if( have_rows('list-connect') ): ?>
                <?php while( have_rows('list-connect') ): the_row(); 
                    $image = get_sub_field('img');
                    $picture = $image['sizes']['thumbnail']; 
                    ?>

                    <div class="col-lg-4 col-12">
	                    <ul class="list-utility">
	                    	<li>
	                    		<img class="img-connect" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                    	</li>

	                    	<li class="content-utility">
	                    		<h2><?php echo get_sub_field('title'); ?></h2>

	                    		<p><?php echo get_sub_field('text1'); ?></p>

	                    		<p><?php echo get_sub_field('text2'); ?></p>

	                    		<p><?php echo get_sub_field('text3'); ?></p>
	                    	</li>
	                    </ul>
	                </div>

                <?php endwhile; ?>
            <?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>   