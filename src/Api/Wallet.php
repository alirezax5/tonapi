<?php

namespace alirezax5\Tonapi\Api;
trait Wallet
{
    public static function getWalletBackup($token)
    {
        self::setHeaders(['X-TonConnect-Auth' => $token]);
        return self::request('/wallet/backup', [], self::GET);
    }

    public static function setWalletBackup($token)
    {
        self::setHeaders(['X-TonConnect-Auth' => $token]);
        return self::request('/wallet/backup', [], self::PUT);
    }

    public static function tonConnectProof($body)
    {
        self::setHeaders(['content-Type: application/x-www-form-urlencoded']);
        return self::request('/wallet/auth/proof', $body, self::POST);
    }

    public static function getAccountSeqno($account_id)
    {
        return self::request('/wallet/' . $account_id . '/seqno', [], self::GET);
    }

    public static function getWalletsByPublicKey($public_key)
    {
        return self::request('/pubkeys/' . $public_key . '/wallets', [], self::GET);
    }

    public static function emulateMessageToWallet($body)
    {
        self::setHeaders(['Accept-Language' => 'en']);
        return self::request('/wallet/emulate', $body, self::POST);
    }

}

