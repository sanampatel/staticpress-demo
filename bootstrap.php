<?php

$events->afterBuild(App\Listeners\GenerateSitemap::class);
$events->afterBuild(App\Listeners\GenerateIndex::class);

use TightenCo\Jigsaw\Jigsaw;


function content_sanitize($value)
{
    return str_replace(["\r", "\n", "\r\n"], ' ', strip_tags($value));
}

function str_limit_soft($value, $limit = 100, $end = '...')
{
    if (mb_strlen($value, 'UTF-8') <= $limit) {
        return $value;
    }
    return rtrim(strtok(wordwrap($value, $limit, "\n"), "\n"), ' .') . $end;
}

function posts_filter($posts, $tag)
{
    return $posts->filter(function ($post) use ($tag) {
    	// $post->tags = array_map('strtolower', $post->tags);
        return collect($post->tags)->contains($tag->name());
    });
}

function posts_filter_cat($posts, $category)
{
    return $posts->filter(function ($post) use ($category) {
    	// $post->categories = array_map('strtolower', $post->categories);
        return collect($post->categories)->contains($category->name());
    });
}


function get_setting($settings, $key)
{
    return $settings->filter(function ($setting) use ($key) {
        $setting->keys = array_map('strtolower', $setting->keys);
        return collect($setting->keys)->contains($key->name());
    });
}

function get_header($headers, $key)
{
    return $headers->filter(function ($header) use ($key) {
        $header->keys = array_map('strtolower', $header->keys);
        return collect($header->keys)->contains($key->name());
    });
}

