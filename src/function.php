<?php


if (!function_exists('flash')) {

    /**
     * @param string $message
     * @return mixed
     */
    function flash($message = '')
    {
        $notify = app('flash');
        if (!is_null($message)) {
            return $notify->success($message); //默认为success
        }
        return $notify;
    }
}