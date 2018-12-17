<?php
$form = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
<label>
    <span class="screen-reader-text">' . _x( 'Search for:', 'label' ) . '</span>

<div class="field has-addons has-addons-right">
  <div class="control">
    <input class="input  is-small search-field" type="search" placeholder="' . esc_attr_x( 'Search &hellip;', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" />
  </div>
  <div class="control">
    <button type="submit" class="button  is-small">Search</button>
  </div>
</div>

</form>';

echo $form;