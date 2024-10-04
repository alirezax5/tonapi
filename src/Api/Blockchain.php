<?php

namespace alirezax5\Tonapi\Api;
trait Blockchain
{
    public static function getReducedBlockchainBlocks($from, $to)
    {
        return self::request('/blockchain/reduced/blocks', ['from' => $from, 'to' => $to], self::GET);
    }

    public static function getBlockchainBlock($block_id)
    {
        return self::request('/blockchain/blocks/' . $block_id, [], self::GET);
    }

    public static function getBlockchainMasterchainShards($masterchain_seqno)
    {
        return self::request('/blockchain/masterchain/' . $masterchain_seqno . '/shards', [], self::GET);
    }

    public static function getBlockchainMasterchainBlocks($masterchain_seqno)
    {
        return self::request('/blockchain/masterchain/' . $masterchain_seqno . '/blocks', [], self::GET);
    }

    public static function getBlockchainMasterchainTransactions($masterchain_seqno)
    {
        return self::request('/blockchain/masterchain/' . $masterchain_seqno . '/transactions', [], self::GET);
    }

    public static function getBlockchainConfigFromBlock($masterchain_seqno)
    {
        return self::request('/blockchain/masterchain/' . $masterchain_seqno . '/config', [], self::GET);
    }

    public static function getRawBlockchainConfigFromBlock($masterchain_seqno)
    {
        return self::request('/blockchain/masterchain/' . $masterchain_seqno . '/config/raw', [], self::GET);
    }

    public static function getBlockchainBlockTransactions($block_id)
    {
        return self::request('/blockchain/blocks/' . $block_id . '/transactions', [], self::GET);
    }

    public static function getBlockchainTransaction($transaction_id)
    {
        return self::request('/blockchain/transactions/' . $transaction_id, [], self::GET);
    }

    public static function getBlockchainTransactionByMessageHash($msg_id)
    {
        return self::request('/blockchain/messages/' . $msg_id . '/transaction', [], self::GET);
    }

    public static function getBlockchainValidators()
    {
        return self::request('/blockchain/validators', [], self::GET);
    }

    public static function getBlockchainMasterchainHead()
    {
        return self::request('/blockchain/masterchain-head', [], self::GET);
    }

    public static function getBlockchainRawAccount($account_id)
    {
        return self::request('/blockchain/accounts/' . $account_id, [], self::GET);
    }

    public static function getBlockchainAccountTransactions($account_id, $after_lt = null, $before_lt = null, $limit = 100, $sort_order = 'desc')
    {
        return self::request('/blockchain/accounts/' . $account_id . '/transactions', ['after_lt' => $after_lt, 'before_lt' => $before_lt, 'limit' => $limit, 'sort_order' => $sort_order], self::GET);
    }
    public static function execGetMethodForBlockchainAccount($account_id, $method_name , $args = null)
    {
        return self::request('/blockchain/accounts/' . $account_id . '/methods/'.$method_name, ['args' => $args, ], self::GET);
    }
    public static function sendBlockchainMessage( $body)
    {
        return self::request('/blockchain/message' ,$body, self::POST);
    }
    public static function getBlockchainConfig( )
    {
        return self::request('/blockchain/config' ,[], self::GET);
    }
    public static function getRawBlockchainConfig( )
    {
        return self::request('/blockchain/config/raw' ,[], self::GET);
    }
    public static function blockchainAccountInspect( $account_id)
    {
        return self::request('/blockchain/accounts/'.$account_id.'/inspect' ,[], self::GET);
    }
}

