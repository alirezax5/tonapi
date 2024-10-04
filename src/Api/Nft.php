<?php

namespace alirezax5\Tonapi\Api;
trait Nft
{
    public static function getAccountNftHistory($account_id, $limit = 100, $before_lt = null, $start_date = null, $end_date = null)
    {
        return self::request('/accounts/' . $account_id . '/nfts/history', ['limit' => $limit, 'before_lt' => $before_lt, 'start_date' => $start_date, 'end_date' => $end_date], self::GET);
    }


    public static function getNftCollections($limit = 100, $offset = 0,)
    {
        return self::request('/nfts/collections', ['limit' => $limit, 'offset' => $offset], self::GET);
    }

    public static function getNftCollection($account_id)
    {
        return self::request('/nfts/collections/' . $account_id, [], self::GET);
    }

    public static function getItemsFromCollection($account_id)
    {
        return self::request('/nfts/collections/' . $account_id . '/items', [], self::GET);
    }

    public static function getNftItemsByAddresses($account_ids)
    {
        return self::request('/nfts/_bulk', ['account_ids' => $account_ids], self::POST);
    }

    public static function getNftItemByAddress($account_id)
    {
        return self::request('/nfts/' . $account_id, [], self::GET);
    }

    public static function getNftHistoryByID($account_id, $limit = 100, $before_lt = null, $start_date = null, $end_date = null)
    {
        return self::request('/nfts/' . $account_id . '/history', ['limit' => $limit, 'before_lt' => $before_lt, 'start_date' => $start_date, 'end_date' => $end_date], self::GET);
    }

}