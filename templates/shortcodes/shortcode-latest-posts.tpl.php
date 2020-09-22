

<div data-section="sections/restaurant-theme.html">
    <section class="space-lg">
        <div class="container">
            <div class="row text-center-sm">
                <div class="col-sm-3">
                    <h1 class="hr-after margin-top-0 font-cursive">
                        <?php echo !empty( $atts['awe_post_title'] ) ? $atts['awe_post_title'] : '' ?>
                    </h1>
                    <p class="lead">
                        <?php echo !empty( $atts['awe_post_desc'] ) ? $atts['awe_post_desc'] : '' ?>
                    </p>
                    <?php if ( !empty($atts['awe_post_title']) || !empty($atts['awe_post_desc']) ): ?>
                        <p>
                            <a href="<?php echo !empty( $atts['awe_post_url_btn'] ) ? $atts['awe_post_url_btn'] : '' ?>" class="btn btn-dark btn-md btn-round">
                                <?php echo !empty( $atts['awe_post_btn_name'] ) ? $atts['awe_post_btn_name'] : '' ?>
                            </a>
                        </p>
                    <?php endif; ?>
                    <span class="margin-top-30 visible-xs"></span>
                </div>
                <?php
                    $catId = $atts['category_latest_posts'];
                    $args = array(
                        'posts_per_page' => !empty( $atts['number_posts'] ) ? $atts['number_posts'] : '2',
                        'category' => $catId
                    );
                    $posts = get_posts( $args );
                ?>
                <div class="col-sm-9">
                    <div class="row">
                        <?php if( !empty( $posts ) ): ?>
                            <?php foreach ( $posts as $post ): ?>
                                <div class="col-sm-6">
                                    <div class="iconBox">
                                        <a href="<?php echo get_permalink($post->ID) ?>" class="thumbnail">
                                            <img src="<?php echo get_the_post_thumbnail_url( $post, '409x271' ) ?>" alt="...">
                                        </a>
                                        <div class="iconBox-content">
                                            <h4 class="iconBox-title"><?php echo !empty( $post->post_title ) ? $post->post_title : '' ?></h4>
                                            <p>
                                                <?php echo !empty( $post->post_content ) ? wp_trim_words( $post->post_content, 20, '...' ) : '' ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>