<?php

namespace alirezax5\Tonapi\Api;
trait Events
{
    public static function getEvent($event_id)
    {
        return self::request('/events/' . $event_id, [], self::GET);
    }

    public static function emulateMessageToEvent($body)
    {
        return self::request('/events/emulate', $body, self::GET);
    }

}

