<?php

namespace alirezax5\Tonapi\Api;
trait Jettons
{
    public static function getJettons($limit = 100, $offset = 0)
    {
        return self::request('/jettons', ['limit' => $limit, 'offset' => $offset], self::GET);
    }

    public static function getJettonInfo($account_id)
    {
        return self::request('/jettons/' . $account_id, [], self::GET);
    }

    public static function getJettonHolders($account_id, $limit = 100, $offset = 0)
    {
        return self::request('/jettons/' . $account_id . '/holders', ['limit' => $limit, 'offset' => $offset], self::GET);
    }

    public static function getJettonTransferPayload($account_id, $jetton_id)
    {
        return self::request('/jettons/' . $jetton_id . '/transfer/' . $account_id . '/payload', [], self::GET);
    }

    public static function getJettonsEvents($event_id)
    {
        return self::request('/events/' . $event_id . '/jettons', [], self::GET);
    }

}