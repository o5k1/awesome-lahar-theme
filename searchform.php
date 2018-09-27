<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text">
        Cerca e premi invio
        </span>
        <input type="search" class="search-field" placeholder="Cerca" value="<?php echo get_search_query(); ?>"
               name="s"/>
    </label>
</form>