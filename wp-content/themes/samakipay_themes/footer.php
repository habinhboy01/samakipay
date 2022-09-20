
	<div class="bg-footer">
		<div class="container">
			<ul class="list-social">
				<?php if( have_rows('list-social', 'option') ): ?>
		            <?php while( have_rows('list-social', 'option') ): the_row(); 
		                $link = get_sub_field('link');
		                $social_icon = get_sub_field('icon');
		                ?>

		                <li>
			                <a href="<?php echo $link;?>" target="_blank">
							   <?php echo $social_icon ?>
							</a>
						</li>

		       	    <?php endwhile; ?>
				<?php endif; ?>
			</ul>

			<div class="row bg-footer2">
				<!-- menu footer 1 -->

				<div class="col-lg-4 col-12">
					<a class="home-url" href="<?php echo home_url(); ?>">
		            	<img class="img_logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
		        	</a>

		        	<p class="text-footer"><?php the_field('intro-mtu', 'option'); ?></p>

		        	<?php 
	                    $image = get_field('logo-mtu', 'option');
		                    if( !empty( $image ) ): ?>
		                        <img class="img-footer" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	                <?php endif; ?>
				</div>

				<!-- about us -->

				<div class="col-lg-2 col-12">
					<div class="title-menu-footer">
						<h1><?php echo get_field('title-about-us', 'option'); ?></h1>

						<span class="icon-footer"><i class="fas fa-angle-down"></i></span>

					</div>

					<?php wp_nav_menu (
				        array('theme_location' => 'menu-1', 'menu_class' => 'menu-footer'));?>
				</div>

				<!-- industries -->

				<div class="col-lg-2 col-12">
					<div class="title-menu-footer">
						<h1><?php echo get_field('title-industries', 'option'); ?></h1>

						<span class="icon-footer2"><i class="fas fa-angle-down"></i></span>

					</div>

					<?php wp_nav_menu (
				        array('theme_location' => 'menu-2', 'menu_class' => 'menu-footer2'));?>
				</div>

				<!-- quick links -->

				<div class="col-lg-2 col-12">
					<div class="title-menu-footer">
						<h1><?php echo get_field('title-quick-links', 'option'); ?></h1>

						<span class="icon-footer3"><i class="fas fa-angle-down"></i></span>

					</div>

					<ul class="menu-footer3">
						<?php if( have_rows('list-quick-links', 'option') ): ?>
				            <?php while( have_rows('list-quick-links', 'option') ): the_row(); 
				                $link = get_sub_field('link');
				                $social_icon = get_sub_field('text');
				                ?>

				                <li>
					                <a href="<?php echo $link;?>" target="_blank">
									   <?php echo $social_icon ?>
									</a>
								</li>

				       	    <?php endwhile; ?>
						<?php endif; ?>
					</ul>

				</div>

				<!-- connect with us -->

				<div class="col-lg-2 col-12">
					<div class="title-menu-footer">
						<h1><?php echo get_field('title-connect', 'option'); ?></h1>

						<span class="icon-footer4"><i class="fas fa-angle-down"></i></span>

					</div>

					<ul class="menu-footer4">
						<?php if( have_rows('list-connect', 'option') ): ?>
				            <?php while( have_rows('list-connect', 'option') ): the_row(); 
				                $link = get_sub_field('link');
				                $social_icon = get_sub_field('text');
				                ?>

				                <li>
					                <a href="<?php echo $link;?>" target="_blank">
									   <?php echo $social_icon ?>
									</a>
								</li>

				       	    <?php endwhile; ?>
						<?php endif; ?>
					</ul>

				</div>
			</div>

			<!-- copyright -->

			<div class="copyright">
				<p class="text-copyright"><?php echo get_field('copyright', 'option'); ?></p>

				<ul class="list-copyright">
					<?php if( have_rows('list-copyright', 'option') ): ?>
			            <?php while( have_rows('list-copyright', 'option') ): the_row(); 
				                $link = get_sub_field('link');
				                $social_icon = get_sub_field('text');
				                ?>

				                <li>
					                <a href="<?php echo $link;?>" target="_blank">
									   <?php echo $social_icon ?>
									</a>
								</li>

			       	    <?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>

	<a class="back-top" href="#"><i class="fas fa-chevron-up"></i></a>


<?php wp_footer() ?>    
<!-- Thư Viện jquery -->
<script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>

<!-- library animation js -->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/aos.js"></script>

<!-- My Js -->

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>


<script>
  AOS.init();
</script>

</body>
</html>