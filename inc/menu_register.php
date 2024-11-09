<?php

register_nav_menu('main_menu', __('Primary Menu', 'MahmudulHasan'));

//Waker Menu Properties
function  codesolution_description($item_output, $item, $depth, $args)
{
    if (!empty($item->description)) {
        $item_output = str_replace($args->link_after . '</a>', '<p class="menu-item-description">' . $item->description . '</p>' . $args->link_after . '</a>', $item_output);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'codesolution_description', 10, 4);
