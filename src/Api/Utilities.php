<?php

namespace alirezax5\Tonapi\Api;
trait Utilities
{
    public static function status()
    {
        return self::request('/status/', [], self::GET);
    }

    public static function addressParse($account_id)
    {
        return self::request('/address/'.$account_id.'/parse', [], self::GET);
    }


}

