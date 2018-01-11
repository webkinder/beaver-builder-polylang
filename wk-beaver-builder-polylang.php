<?php
/*
Plugin Name: WebKinder Beaver Builder Polylang Integration
Plugin URI: https://webkinder.ch/
Description: Plugin to synchronize Beaver Builder Content
Author: Pascal Knecht (support@webkinder.ch)
Version: 1.0.0
Author URI: https://webkinder.ch
 */

add_filter('is_protected_meta', function($protected, $meta_key) {
    if(!isset( $_GET['from_post'], $_GET['new_lang'] )) return $protected;

    $beaver_builder_meta_keys = ['_fl_builder_draft', '_fl_builder_draft_settings', '_fl_builder_data', '_fl_builder_data_settings', '_fl_builder_enabled'];
    if(in_array($meta_key, $beaver_builder_meta_keys)) {
        $protected = false;
    }
    return $protected;
}, 15, 2);
