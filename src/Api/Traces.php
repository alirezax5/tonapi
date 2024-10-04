<?php

namespace alirezax5\Tonapi\Api;
trait Traces
{
    public static function getTrace($trace_id)
    {
        return self::request('/traces/' . $trace_id, [], self::GET);
    }

    public static function emulateMessageToTrace($body )
    {
        return self::request('/traces/emulate', $body, self::GET);
    }


}

