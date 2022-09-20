<?php
/*

	Template Name: Solution For Oil & Gas

*/

get_header(); ?>

	<div class="intro-about">
		<?php 
            $image = get_field('img-onshore');
            if( !empty( $image ) ): ?>
                <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="bg-intro2 bg-about">

        	<h1 class="text-about"><?php echo get_field('title-onshore'); ?></h1>

        </div>
	</div>

    <div class="container">
        <h2 class="text-home8 text-onshore2"><?php echo get_field('onshore'); ?></h2>

        <?php if( have_rows('description-onshore') ): ?>
            <?php while( have_rows('description-onshore') ): the_row(); ?>

                <p class="text-onshore"><?php the_sub_field('content'); ?></p>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="container">

        <div class="row">
            <?php if( have_rows('list-onshore') ): ?>
                <?php while( have_rows('list-onshore') ): the_row(); 
                    $image = get_sub_field('img');
                    $picture = $image['sizes']['thumbnail']; ?>

                    <div class="col-lg-4 col-12">
                        <div class="content-onshore">
                            <h2><?php echo get_sub_field('title'); ?></h2>

                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                            <p><?php the_sub_field('content'); ?></p>
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

                            <p><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <!-- offshore -->

    <div class="container">
        <h2 class="text-home8 text-onshore2"><?php echo get_field('offshore'); ?></h2>
        
        <?php if( have_rows('description-offshore') ): ?>
            <?php while( have_rows('description-offshore') ): the_row(); ?>

                <p class="text-onshore"><?php the_sub_field('content'); ?></p>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="container">
        <div class="row">
            <?php if( have_rows('list-offshore') ): ?>
                <?php while( have_rows('list-offshore') ): the_row(); 
                    $image = get_sub_field('img');
                    $picture = $image['sizes']['thumbnail']; ?>

                    <div class="content-offshore">
                        <h2><?php echo get_sub_field('title'); ?></h2>

                        <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                        <p><?php the_sub_field('content'); ?></p>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="row list-construction2">
            <h2 class="text-home8 text-onshore2"><?php echo get_field('product-offshore'); ?></h2>

            <?php if( have_rows('list-product2') ): ?>
                <?php while( have_rows('list-product2') ): the_row(); 
                    $image = get_sub_field('img');
                    $picture = $image['sizes']['thumbnail']; ?>

                    <div class="col-lg-4 col-12">
                        <div class="content-onshore">

                            <img src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">

                            <p><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>