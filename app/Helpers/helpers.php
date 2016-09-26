<?php

function switchLanguage($lang) {

    $segments = Request::segments();

    $route_name = Request::route()->getName();

    if (isset($segments[0]) and array_key_exists($segments[0], config('languages'))) {
        $segments[0] = $lang;
        return url(implode('/', $segments));
    }

    return url($lang . '/' . implode('/', $segments));

}
