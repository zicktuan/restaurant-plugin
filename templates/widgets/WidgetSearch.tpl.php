<div class="widget widget_search">
    <form name="search_form" method="get" id="search_form01" class="restbeef_search_form">
        <span class="restbeef_icon_search" onclick="javascript:document.getElementById('search_form01').submit();">
            <i class="fa fa-search"></i>
        </span>
        <input type="text" name="s" placeholder="<?php echo (!empty($instance['title'])) ? $instance['title'] : 'Search'?>..." title="Search the site..." class="restbeef_field_search">
        <div class="clear"></div>
    </form>
</div>