<?php
if (!function_exists("show_current_class")) {
    function show_current_class($path, $className = "active")
    {
        $CI = &get_instance();
        $uri_string = $CI->uri->uri_string();

        // Home is usually at / && has 0 total segments
        if ($path === '/' && ($CI->uri->total_segments() === 0)) {
            $ret_val = 'active';
        } else {
            $ret_val = ($uri_string === $path) ? $className : '';
        }

        return $ret_val;
    }
}
