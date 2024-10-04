<?php

namespace alirezax5\Tonapi\Api;
trait Staking
{
    public static function getAccountNominatorsPools($account_id)
    {
        return self::request('/staking/nominator/'.$account_id.'/pools', [], self::GET);
    }

    public static function getStakingPoolInfo($account_id,$Language = 'en')
    {
        self::setHeaders(['Accept-Language' => $Language]);
        return self::request('/staking/pool/'.$account_id, [], self::GET);
    }

    public static function getStakingPoolHistory($account_id)
    {
        return self::request('/staking/pool/'.$account_id.'/history', [], self::GET);
    }
    public static function getStakingPools()
    {
        return self::request('/staking/pools', [], self::GET);
    }

}

