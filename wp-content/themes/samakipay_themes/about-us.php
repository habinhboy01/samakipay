<?php
/*

Template Name: about us page

*/

get_header(); ?>
    
    <div class="container">
    	<div class="intro-about">
    		<?php 
                $image = get_field('intro-about');
                if( !empty( $image ) ): ?>
                    <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
    
            <div class="bg-intro2 bg-about">
    
            	<!--<h1 class="text-about"><?php echo get_field('title-about'); ?></h1>-->
    
            </div>
    	</div>
    </div>

	<!-- TƯ CÁCH PHÁP NHÂN -->

	<div class="container legal_status">
		<h2 class="text-about2"><?php echo get_field('legal_status'); ?></h2>

        <?php the_field('list-legal_status') ?>

	</div>


    <!-- thương hiệu MTU -->

    <div class="container legal_status">
        <ul class="brand bg-about2">
            <li class="text-about4"><?php echo get_field('text', 'option'); ?></li>

            <li>
                <?php 
                $image = get_field('img', 'option');
                    if( !empty( $image ) ): ?>
                        <img class="logo-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </li>
       </ul>
        
        <h2 class="text-about2"><?php echo get_field('brand'); ?></h2>
        
        <div class="list-brand">
            <?php the_field('list-brand') ?>
        </div>
    </div>

	<!-- địa chỉ các trụ sở -->

	<div class="container legal_status">
		<h2 class="text-about2"><?php echo get_field('address-office'); ?></h2>

	    <ul class="list-legal_status">
    		<?php if( have_rows('list-address-office') ): ?>
            	<?php while( have_rows('list-address-office') ): the_row(); ?>

            		<li class="text-about3"><?php echo get_sub_field('title'); ?></li>

            		<li>
            			<ul>
            				<li><?php echo get_sub_field('text2'); ?></li>

            				<li><?php echo get_sub_field('text3'); ?></li>
            			</ul> 			          				
            		</li>

           	    <?php endwhile; ?>
        	<?php endif; ?>
    	</ul>
	</div>

	<!-- thông tin liên hệ -->

	<div class="container legal_status connect-contact">
		<h2 class="text-about2"><?php echo get_field('connect-contact'); ?></h2>

	    <ul class="list-legal_status">
    		<?php if( have_rows('list-connect-contact') ): ?>
            	<?php while( have_rows('list-connect-contact') ): the_row(); ?>

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
	
	<div class="container">
        <div class="about-yotube">
    	    <?php the_field('youtube') ?>
    	</div>
    </div>



<?php get_footer(); ?>   