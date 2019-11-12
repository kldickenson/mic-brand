<form role="search" method="get" class="search-form bg-umblue border border-white" action="<?php echo esc_url( home_url( '/' ) ); ?>"><a name="search"></a>
    <label for="search" class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ); ?></label>
    <input type="search" id="search" class="search-field bg-transparent text-white p-1 text-sm opacity-100" aria-label="search text"
               placeholder="<?php echo esc_attr_x( 'SEARCH', 'placeholder' ); ?>"
               value="<?php echo get_search_query(); ?>" name="s" />
    <input type="submit" class="search-submit bg-transparent text-ummaize p-2 pr-4 w-4 h-4"
           style="background: url(<?php echo get_template_directory_uri() . '/img/search-icon.svg'; ?>) 50% 50% no-repeat;"
           value=""/>
</form>
