<?php


if (!function_exists('flash')) {

    /**
     * @param string $message
     * @return \XuTL\Flash\FlashNotifiy
     */
    function flash($message = '')
    {
        /**
         * @var \XuTL\Flash\FlashNotifiy $notify
         */
        $notify = app('flash');
        if (!is_null($message)) {
            return $notify->success($message); //默认为success
        }
        return $notify;
    }
}