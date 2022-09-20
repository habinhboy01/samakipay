<?php

/*

	Template Name: contact page

*/

get_header(); ?>

	<div class="intro-about">
		<?php 
            $image = get_field('img-contact');
            if( !empty( $image ) ): ?>
                <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="bg-intro2 bg-about">

        	<h1 class="text-about"><?php echo get_field('contact'); ?></h1>

        </div>
	</div>

	<!-- form contact -->

	<div class="container bg-certificates">
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="bg-contact">
					<h1 class="text-contact"><?php echo get_field('assistance-center'); ?></h1>

					<?php echo do_shortcode( '[contact-form-7 id="195" title="contact us"]' ); ?>
				</div>
			</div>

			<div class="col-lg-4 col-12">
				<ul class="list-legal_status">
		    		<?php if( have_rows('list-contact') ): ?>
		            	<?php while( have_rows('list-contact') ): the_row(); ?>

		            		<li class="text-about3"><?php echo get_sub_field('title'); ?></li>

		            		<li>
		            			<ul>
		            				<li><?php echo get_sub_field('text'); ?></li>

		            				<li><?php echo get_sub_field('text2'); ?></li>

		            				<li><?php echo get_sub_field('text3'); ?></li>
		            			</ul> 			          				
		            		</li>

		           	    <?php endwhile; ?>
		        	<?php endif; ?>
		    	</ul>
			</div>
		</div>
	</div>

<?php get_footer(); ?>