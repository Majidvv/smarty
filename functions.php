<?php
require_once(TEMPLATEPATH.'/admin/admin-functions.php');
require_once(TEMPLATEPATH.'/admin/admin-interface.php');
require_once(TEMPLATEPATH.'/admin/theme-settings.php');


if (function_exists('register_sidebar')) {
    register_sidebar(array(
            'name'          => 'left-Sidebar',
            'id'            => "menu",
            'description'   => 'Under menu',
            'before_widget' => '<aside class="widget %2$s">',
            'after_widget'  => "</aside>",
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => "</h4>"
    ));}
    
