<div class="restbeef_block restbeef_js_margin restbeef_iconbox_block" data-margin="0 0 90px 0">

    <h2 class="restbeef_block_title align_center restbeef_js_margin" data-margin="0 0 50px 0">
        <?php echo !empty($atts['awe_about_benefits_sub_title']) ? '<span class="restbeef_up_title">'.$atts['awe_about_benefits_sub_title'].'</span>' : ''?>
        <?php echo !empty($atts['awe_about_benefits_title']) ? $atts['awe_about_benefits_title'] : ''?>
    </h2>

    <div class="restbeef_block_inner">
        <div class="row restbeef_js_padding" data-padding="0 0 70px 0">

            <?php $i = 0; if(!empty($listItems[0])):?>
                <?php foreach($listItems as $item): $i++ ?>
                <div class="col-4" <?php echo ($i > 3) ? 'style="padding-top: 40px"' : '' ?>>
                    <div class="restbeef_iconbox align_center">
                        <i class="fa <?php echo $item['icon'] ?>"></i>
                        <h4><?php echo !empty($item['title']) ? $item['title'] : '' ?></h4>
                        <p><?php echo !empty($item['desc']) ? $item['desc'] : '' ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif ?>

        </div>
    </div>
</div>