<form action="<?php echo home_url('/') ?>" method="get" id="form_search" class="d-none">
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <button id="search-btn">Search</button>
</form>