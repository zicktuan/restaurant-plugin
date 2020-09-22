<div class="single-sidebar-widget popular-post-widget">
	<h4 class="popular-title"><?php echo isset($instance['title']) ? esc_html__($instance['title'], 'bookawesome') : '' ?></h4>
	<div class="popular-post-list">
		<?php if (!empty($listPost)) : ?>
			<?php foreach ($listPost as $value) : ?>
				<div class="single-post-list d-flex flex-row align-items-center">
					<div class="thumb">
						<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($value->ID, '100x60'); ?>" alt="">
					</div>
					<div class="details">
						<a href="#">
							<h6><?php echo !empty($value->post_title) ? $value->post_title : '' ?></h6>
						</a>
						<p><?php echo date('M, j, Y', $value->post_date) ?></p>
					</div>
				</div>
			<?php endforeach ?>
		<?php endif ?>
	</div>
</div>