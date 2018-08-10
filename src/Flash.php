<?php
namespace XuTL\Flash;

use Illuminate\Support\Facades\Facade;

/**
 * Class Flash
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class Flash extends Facade
{

    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'flash';
    }
}