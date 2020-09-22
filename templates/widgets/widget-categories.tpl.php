<div class="single-sidebar-widget post-category-widget">
	<h4 class="category-title"><?php echo isset($instance['title']) ? esc_html__($instance['title'], 'bookawesome') : '' ?></h4>
	<ul class="cat-list">
		<?php if (!empty($categories)) : ?>
			<?php foreach ($categories as $category) : ?>
				<li>
					<a href="<?php echo home_url() ?>/category/<?php echo $category->slug ?>"" class=" d-flex justify-content-between">
						<p><?php echo $category->name ?></p>
						<p><?php echo $category->category_count ?></p>
					</a>
				</li>
			<?php endforeach ?>
		<?php endif ?>
	</ul>
</div>