<div class="restbeef_block restbeef_js_margin" data-margin="0 0 110px 0">
    <div class="restbeef_block_inner align_center">
        <div class="row restbeef_keep_tablet_row">

            <div class="col-4">
                <div class="restbeef_contact_info_wrapper">
                    <h2>
                        <span class="restbeef_up_title"><?php _e('Giờ Làm Việc', 'bookawesome') ?></span>
                    </h2>
                    <?php foreach ($workingHour as $wh): ?>
                    <div class="restbeef_contact_info">
                        <?php echo !empty($wh['title']) ? '<h6>'.$wh['title'].'</h6>' : '' ?>

                        <?php echo !empty($wh['time']) ? 'From '.$wh['time'] : '' ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-4">
                <div class="restbeef_contact_info_wrapper">
                    <h2>
                        <span class="restbeef_up_title"><?php _e('Thông Tin Liên Hệ', 'bookawesome') ?></span>
                    </h2>
                    <?php foreach ($contactInfo as $info): ?>
                    <div class="restbeef_contact_info">
                        <?php echo !empty($info['title']) ? '<h6>'.$info['title'].'</h6>' : '' ?>
                        <?php if(!empty($info['info'])): ?>

                            <?php foreach (vc_param_group_parse_atts($info['info']) as $v): ?>
                                <?php echo !empty($v['info_value']) ? '<span>'.$v['info_value'].'</span><br>' : '' ?>
                            <?php endforeach;?>
                        <?php endif; ?>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>

            <div class="col-4">
                <div class="restbeef_contact_info_wrapper">
                    <h2>
                        <span class="restbeef_up_title"><?php _e('Theo Dõi Chúng Tôi', 'bookawesome') ?></span>
                    </h2>
                    <div class="restbeef_contact_info">
                        <h6><?php _e('Mạng Xã Hội', 'bookawesome') ?></h6>
                        <ul class="restbeef_contact_socials">
                            <?php foreach ($contactSocial as $social): ?>
                            <li><a href="<?php echo $social['url'] ?>"><i class="fa <?php echo $social['icon'] ?>"></i></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>

                    <div class="restbeef_contact_info">
                        <h6><?php _e('Email', 'bookawesome') ?></h6>
                        <?php foreach ($contactEmail as $email): ?>
                            <a href="mailto:<?php echo !empty($email['email']) ? $email['email'] : ''?>"><?php echo !empty($email['email']) ? $email['email'] : ''?></a><br>
                        <?php endforeach ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>