<?php get_header(); ?>

	<div class="intro-about">
		<?php 
            $image = get_field('img-intro','option');
            if( !empty( $image ) ): ?>
                <img class="img-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="bg-intro2 bg-about">

        	<h1 class="text-about"><?php echo get_field('title-news', 'option'); ?></h1>

        </div>
	</div>

	<div class="container bg-railway2">
		<div class="row">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<div class="col-lg-4 col-md-6 col-12 content-service3">
						<a class="img-news" href="<?php the_permalink() ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>

						<div class="content-news">
							<ul class="list-news">
								<li class="text-news"><?php the_category(); ?></li>

								<li><?php echo get_the_date(); ?></li>
							</ul>

							<h2 class="text-news2">
							    <a href="<?php the_permalink() ?>">
							        <?php the_title(); ?>
							    </a>
							 </h2>

							<a class="text-news3" href="<?php the_permalink() ?>">Read More <i class="fas fa-angle-right"></i></a>
						</div>
					</div>

				<?php endwhile;?>
			<?php endif; ?>
		</div>

		<!-- phân trang -->

		<?php if(paginate_links()!='') {?>
			<div class="pagination">
				<?php
				global $wp_query;
				$big = 999999999;
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'prev_text'    => __('<i class="fas fa-angle-left"></i>'),
					'next_text'    => __('<i class="fas fa-angle-right"></i>'),
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
					) );
			    ?>
			</div>
		<?php } ?>
	</div>

<?php get_footer(); ?>