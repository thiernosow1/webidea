<?php
namespace WebideaTheme\Models;

class PostModel {
    public static function getLatestPosts($limit = 5) {
        $args = [
            'post_type' => 'post',
            'posts_per_page' => $limit,
        ];
        return \get_posts($args);
    }
}