<?php

namespace alirezax5\Tonapi\Api;
trait Accounts
{
    public static function getAccount($account_id)
    {
        return self::request('/accounts/' . $account_id, [], self::GET);
    }


    public static function accountDnsBackResolve($account_id)
    {
        return self::request('/accounts/' . $account_id . '/dns/backresolve', [], self::GET);
    }


    public static function getAccountJettonsBalances($account_id, $currencies = '')
    {
        return self::request('/accounts/' . $account_id . '/jettons', ['currencies' => $currencies], self::GET);
    }

    public static function getAccountJettonBalance($account_id, $jetton_id, $currencies = '')
    {
        return self::request('/accounts/' . $account_id . '/jettons/' . $jetton_id, ['currencies' => $currencies], self::GET);
    }

    public static function getAccountJettonsHistory($account_id, $limit = 100, $start_date = null, $end_date = null)
    {
        return self::request('/accounts/' . $account_id . '/jettons/history', ['start_date' => $start_date, 'end_date' => $end_date, 'limit' => $limit], self::GET);
    }

    public static function getAccountJettonHistoryByID($account_id, $jetton_id, $limit = 100, $start_date = null, $end_date = null)
    {
        return self::request('/accounts/' . $account_id . '/jettons' . $jetton_id . '/history', ['start_date' => $start_date, 'end_date' => $end_date, 'limit' => $limit], self::GET);
    }

    public static function getAccountNftItems($account_id, $collection = null, $limit = 1000, $offset = 0, $indirect_ownership = false)
    {
        return self::request('/accounts/' . $account_id . '/nfts', ['collection' => $collection, 'limit' => $limit, 'offset' => $offset, 'indirect_ownership' => $indirect_ownership], self::GET);
    }

    public static function getAccountEvents($account_id, $limit = 20, $initiator = false, $start_date = null, $end_date = null)
    {
        return self::request('/accounts/' . $account_id . '/events', ['initiator' => $initiator, 'limit' => $limit, 'start_date' => $start_date, 'end_date' => $end_date], self::GET);
    }
    public static function getAccountTraces($account_id, $before_lt = null, $limit= 100,)
    {
        return self::request('/accounts/' . $account_id . '/traces', ['before_lt' => $before_lt, 'limit' => $limit], self::GET);
    }

    public static function getAccountEvent($account_id, $event_id, $subject_only = false)
    {
        return self::request('/accounts/' . $account_id . '/events/' . $event_id, ['subject_only' => $subject_only], self::GET);
    }

    public static function searchAccounts($name)
    {
        return self::request('/accounts/search', ['name' => $name], self::GET);
    }

    public static function getAccountDnsExpiring($account_id, $period = false)
    {
        return self::request('/accounts/' . $account_id . '/dns/expiring', ['period' => $period], self::GET);
    }

    public static function getAccountPublicKey($account_id)
    {
        return self::request('/accounts/' . $account_id . '/publickey', [], self::GET);
    }

    public static function getAccountMultisigs($account_id)
    {
        return self::request('/accounts/' . $account_id . '/multisigs', [], self::GET);
    }

    public static function getAccountDiff($account_id, $start_date, $end_date)
    {
        return self::request('/accounts/' . $account_id . '/diff', ['start_date' => $start_date, 'end_date' => $end_date], self::GET);
    }
}