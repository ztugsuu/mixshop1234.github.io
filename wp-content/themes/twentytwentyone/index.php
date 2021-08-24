<?php get_header(); ?>

<div class="slider">
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<?php
			$args = array('post_type' => 'slider', 'posts_per_page' => 100, 'order' => 'DESC');
			$loop = new WP_Query($args);
			while ($loop->have_posts()) : $loop->the_post();
			?>
				<div class="swiper-slide">
					<?php
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id, 'full', true);
					?>
					<img src="<?php echo $thumb_url[0] ?>" alt="" />

				</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-pagination"></div>
	</div>
</div>

<!-- post medeelel  -->
<div class="news">
	<div class="container">
		<div>
			<br>
		</div>
		<h2 class="title" style="
    text-align:center;
">БҮТЭЭГДЭХҮҮН </h2>
		<div>
			<hr>
			<br>
		</div>
		<div class="divider">
			<div class="row">
				<?php
				query_posts('cat=1&posts_per_page=8');
				if (have_posts()) :
					while (have_posts()) : the_post();
				?>
						<div class="col-md-3 col-cm-3">
							<div class="n1">
								<div class="n1-image">
									<a href="#">
										<?php
										$thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id, 'full', true);
										?>

										<img class="imgstyle" src="<?php echo $thumb_url[0] ?>" alt="">

									</a>
								</div>

								<h3 class="title_1"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
								<!-- <div class="date"><?php echo get_the_date('Y/m/d'); ?></div> -->
								<p class="pra">
									<?php
									$content = get_the_content();
									$content = strip_tags($content);
									echo mb_substr($content, 0, 15), '...';
									?>
								</p>
							</div>
						</div>
				<?php
					endwhile;
				endif;
				wp_reset_query();
				?>
			</div>

		</div>

	</div>

</div>












<?php get_footer(); ?>