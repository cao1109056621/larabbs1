<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/2
 * Time: 14:46
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}