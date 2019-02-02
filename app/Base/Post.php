<?php

namespace App\Base;

use \App\Utils\Converter;

class Post
{
    public function __construct()
    {
        //
    }

    public function register()
    {
        add_filter('wp_insert_post_data', array($this, 'filter_post_data'), '99', 2);
    }

    public function filter_post_data($data, $postarr)
    {
        $converter = new Converter();

        if($data['post_title']) {
            $data['post_title'] = $converter->convertToUni($data['post_title']);
        }
        if($data['post_content']) {
            $data['post_content'] = $converter->convertToUni($data['post_content']);
        }
        if($data['post_excerpt']) {
            $data['post_excerpt'] = $converter->convertToUni($data['post_excerpt']);
        }

        return $data;
    }
}