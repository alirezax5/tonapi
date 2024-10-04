<?php

namespace alirezax5\Tonapi\Api;
trait Storage
{
    public static function getStorageProviders($event_id)
    {
        return self::request('/storage/providers' . $event_id, [], self::GET);
    }
}

