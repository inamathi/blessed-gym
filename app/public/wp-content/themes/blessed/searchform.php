<form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="Search-form-style search-form">
    <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="キーワードを入力" id="s" class="form-text">
    <button type="submit" id="s" class="search-btn"><span class="dashicons dashicons-search"></span></button>
</form>