<?php
namespace WebideaTheme\Models;

class ACFModel {
    public static function getField($field_name, $post_id = null) {
        if (!function_exists('get_field')) {
            error_log('ACF n\'est pas installé ou activé. La fonction get_field() n\'existe pas.');
            return '';
        }
        return \get_field($field_name, $post_id);
    }

    public static function getOptionsField($field_name) {
        if (!function_exists('get_field')) {
            error_log('ACF n\'est pas installé ou activé. La fonction get_field() n\'existe pas.');
            return '';
        }
        return \get_field($field_name, 'option');
    }
}
