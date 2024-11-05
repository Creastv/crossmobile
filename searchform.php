<div class="wraper-search-form">
    <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x('Szukaj …', 'placeholder') ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x('szukaj:', 'label') ?>" />
        <input type="submit" class="search-submit"
            value="<?php echo esc_attr_x('Szukaj', 'submit button') ?>" />
    </form>
</div>