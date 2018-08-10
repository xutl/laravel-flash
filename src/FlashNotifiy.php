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
    public function success($message, $title = null)
    {
        return $this->message($message, $title, 'success');
    }

    /**
     * @param string $message
     * @return FlashNotifiy
     */
    public function error($message, $title = null)
    {
        return $this->message($message, $title, 'error');
    }

    /**
     * @param string $message
     * @return FlashNotifiy
     */
    public function warning($message, $title = null)
    {
        return $this->message($message, $title, 'warning');
    }

    /**
     * @param string $message
     * @param string $title
     * @return FlashNotifiy
     */
    public function info($message, $title = null)
    {
        return $this->message($message, 'info', $title);
    }

    /**
     * @param string $message
     * @param string $title
     * @param string $type
     * @return $this
     */
    public function message($message, $title, $type)
    {
        $this->session->flash('flash.message', $message);
        $this->session->flash('flash.title', $title);
        $this->session->flash('flash.type', $type);
        return $this;
    }
}