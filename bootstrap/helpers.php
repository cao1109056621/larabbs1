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