<?php
/*

	Template Name: Low & Medium Voltage Panel

*/

get_header(); ?>

	<div class="intro-about">
		<?php 
            $image = get_field('img');
            if( !empty( $image ) ): ?>
                <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="bg-intro2 bg-about">

        	<h1 class="text-about"><?php echo get_field('title'); ?></h1>

        </div>
	</div>

    <div class="container">
        <h2 class="text-home8 text-onshore2"><?php echo get_field('title-panel'); ?></h2>

        <div class="row">
            <?php if( have_rows('list-panel') ): ?>
                <?php while( have_rows('list-panel') ): the_row(); 
                    $image = get_sub_field('img');
                    $picture = $image['sizes']['thumbnail']; ?>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="content-panel">

                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                            <p><?php echo get_sub_field('text'); ?></p>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="row list-construction2">
            <h2 class="text-home8 text-onshore2"><?php echo get_field('product-onshore'); ?></h2>

            <?php if( have_rows('list-product') ): ?>
                <?php while( have_rows('list-product') ): the_row(); 
                    $image = get_sub_field('img');
                    $picture = $image['sizes']['thumbnail']; ?>

                    <div class="col-lg-4 col-12">
                        <div class="content-onshore">

                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>


<?php get_footer(); ?>