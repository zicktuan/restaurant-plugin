<div class="widget widget_categories">
    <h5 class="widgettitle">
        <span>
            <?php echo isset($instance['title']) ? esc_html__($instance['title'], 'bookawesome') : '' ?>
        </span>
    </h5>
    <ul>
        <?php if (!empty($listItems)) : ?>
            <?php foreach ($listItems as $category) : ?>
                <li class="cat-item">
                    <a href="<?php echo $category->url ?>">
                    <?php echo $category->title ?>
                    </a>
                </li>
            <?php endforeach ?>
        <?php endif ?>
    </ul>
</div>