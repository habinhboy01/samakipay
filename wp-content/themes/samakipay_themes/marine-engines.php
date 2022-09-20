<?php
/*

	Template Name: Marine Engines

*/

get_header(); ?>

	<div class="intro-about">
		<?php 
            $image = get_field('img-title');
            if( !empty( $image ) ): ?>
                <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="bg-intro2 bg-about">

        	<h1 class="text-about"><?php echo get_field('marine_engines'); ?></h1>

        </div>
	</div>

	<!-- DANH MỤC ĐỘNG CƠ THỦY -->

	<div class="container bg-benefits">
		<h1 class="text-benefits"><?php echo get_field('title-category'); ?></h1>

		<div class="bg-engines">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-2 content-engines">
					<p class="text-engines"><?php echo get_field('power-range'); ?></p>
				</div>

				<div class="col-lg-10 col-md-10 col-10 content-engines3">
					<div class="row">
						<?php if( have_rows('category-engines') ): ?>
				            <?php while( have_rows('category-engines') ): the_row(); 
				                $image = get_sub_field('img');
				                $picture = $image['sizes']['thumbnail']; ?>

				                <div class="col-lg-3 col-md-3 col-12">
				                	<p class="text-engines2"><?php echo get_sub_field('series'); ?></p>

				                	<img class="img-engines" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

				                	<p class="text-engines3"><?php echo get_sub_field('power'); ?></p>
				               
				                </div>

			           	    <?php endwhile; ?>
				        <?php endif; ?>
				    </div>
				</div>
			</div>
		</div>

		<!-- hình ảnh minh họa -->

		<div class="row content-engines2">
			<?php if( have_rows('product-engines') ): ?>
	            <?php while( have_rows('product-engines') ): the_row(); 
	                $image = get_sub_field('img');
	                $picture = $image['sizes']['thumbnail']; ?>

	                <div class="col-lg-4 col-md-6 col-12">
	                	<img class="img-engines2" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
	                </div>

	        	<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<div class="bg-engines">
			<div class="row">
				<?php if( have_rows('category-engines2') ): ?>
		            <?php while( have_rows('category-engines2') ): the_row(); 
		                $image = get_sub_field('img');
		                $picture = $image['sizes']['thumbnail']; ?>

		                <div class="col-lg-3 col-md-3 col-12">
		                	<p class="text-engines2"><?php echo get_sub_field('series'); ?></p>

		                	<img class="img-engines" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

		                	<p class="text-engines3"><?php echo get_sub_field('power'); ?></p>
		               
		                </div>

	           	    <?php endwhile; ?>
		        <?php endif; ?>
			</div>
		</div>

		<p class="text-engines4"><?php the_field('description-engines'); ?></p>

		<!-- Thương mại hàng hải và trên biển -->

		<div class="bg-marine">
			<div class="bg-marine2">
				<div class="marine_offshore"></div>

				<div class="marine_offshore2">
					<h2><?php echo get_field('marine_offshore'); ?></h2>
				</div>
			</div>

			<div class="row bg-marine">
				<div class="col-lg-5 col-md-5 col-12">
					<h2 class="text-engines5"><?php echo get_field('commercial_marine'); ?></h2>

					<div class="row">
						<!-- Thương mại / -->

						<div class="col-lg-6 col-12">
							<h2 class="text-engines5"><?php echo get_field('merchant'); ?></h2>

							<div class="row">
								<?php if( have_rows('list-merchant') ): ?>
						            <?php while( have_rows('list-merchant') ): the_row(); 
						                $image = get_sub_field('img');
						                $picture = $image['sizes']['thumbnail']; ?>

						                <div class="col-12">
						                	<div class="content-merchant">
							                	<h2><?php echo get_sub_field('title'); ?></h2>

							                	<img class="img-engines3" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

							                	<p class="text-engines3"><?php the_sub_field('content'); ?></p>
							                </div>
						               
						                </div>

					           	    <?php endwhile; ?>
						        <?php endif; ?>
						    </div>
						</div>

						<!-- Trên biển -->

						<div class="col-lg-6 col-12">
							<h2 class="text-engines5"><?php echo get_field('offshore'); ?></h2>

							<div class="row">
								<?php if( have_rows('list-offshore') ): ?>
						            <?php while( have_rows('list-offshore') ): the_row(); 
						                $image = get_sub_field('img');
						                $picture = $image['sizes']['thumbnail']; ?>

						                <div class="col-12">
						                	<div class="content-merchant">
							                	<h2><?php echo get_sub_field('title'); ?></h2>

							                	<img class="img-engines3" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

							                	<p><?php the_sub_field('content'); ?></p>
						               		</div>
						                </div>

					           	    <?php endwhile; ?>
						        <?php endif; ?>
						    </div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 col-md-7 col-12">
					<div class="row">

						<!-- Trên biển / Offshore -->

						<div class="col-lg-6 col-12">
							<h2 class="text-engines5 text-engines6"><?php echo get_field('offshore2'); ?></h2>

							<div class="row">
								<?php if( have_rows('list-offshore2') ): ?>
						            <?php while( have_rows('list-offshore2') ): the_row(); 
						                $image = get_sub_field('img');
						                $picture = $image['sizes']['thumbnail']; ?>

						                <div class="col-12">
						                	<div class="content-merchant">
							                	<h2><?php echo get_sub_field('title'); ?></h2>

							                	<img class="img-engines3" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

							                	<p><?php the_sub_field('content'); ?></p>
						               		</div>
						                </div>

					           	    <?php endwhile; ?>
						        <?php endif; ?>
						    </div>
						</div>

						<!-- Động Cơ Thủy & Hệ Động Lực -->

						<div class="col-lg-6 col-12">
							<h2 class="text-engines5 text-engines6"><?php echo get_field('commercial-authorities'); ?></h2>

							<div class="row">
								<?php if( have_rows('list-commercial-authorities') ): ?>
						            <?php while( have_rows('list-commercial-authorities') ): the_row(); 
						                $image = get_sub_field('img');
						                $picture = $image['sizes']['thumbnail']; ?>

						                <div class="col-12">
						                	<div class="content-merchant">
							                	<h2><?php echo get_sub_field('title'); ?></h2>

							                	<img class="img-engines3" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

							                	<p><?php the_sub_field('content'); ?></p>
						               		</div>
						                </div>

					           	    <?php endwhile; ?>
						        <?php endif; ?>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php 
            $image = get_field('img');
            if( !empty( $image ) ): ?>
                <img class="detail-dynamic" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
	</div>


<?php get_footer(); ?>