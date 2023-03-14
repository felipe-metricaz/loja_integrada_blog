<div class="box_search">
    <form action="<?php echo home_url( '/' ); ?>" method="get" target="_top">
        <input name="s" class="browser-default" placeholder="Procurar..." type="text" value="<?php echo get_search_query() ?>" autocomplete="off">
        <button aria-label="Search Button" type="submit"><i class="material-icons">search</i></button>
    </form>
</div>