<?php

namespace XuTL\Flash;

use Illuminate\Session\Store;

/**
 * Class FlashNotifiy
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class FlashNotifiy
{
    /**
     * @var Store
     */
    public $session;

    /**
     * FlashNotifiy constructor.
     * @param Store $sesstion
     */
    public function __construct(Store $sesstion)
    {
        $this->session = $sesstion;
    }

    /**
     * @param string $message
     * @return FlashNotifiy
     */
    public function success($message)
    {
        return $this->message($message, 'success');
    }

    /**
     * @param string $message
     * @return FlashNotifiy
     */
    public function error($message)
    {
        return $this->message($message, 'error');
    }

    /**
     * @param string $message
     * @return FlashNotifiy
     */
    public function warning($message)
    {
        return $this->message($message, 'warning');
    }

    /**
     * @param string $message
     * @return FlashNotifiy
     */
    public function info($message)
    {
        return $this->message($message, 'info');
    }

    /**
     * @param string $message
     * @param string $type
     * @return $this
     */
    public function message($message, $type)
    {
        $this->session->flash('flash.message', $message);
        $this->session->flash('flash.type', $type);
        return $this;
    }
}