<?php

namespace alirezax5\Tonapi\Api;
trait Dns
{
    public static function getDnsInfo($domain_name)
    {
        return self::request('/dns/' . $domain_name, [], self::GET);
    }

    public static function dnsResolve($domain_name)
    {
        return self::request('/dns/' . $domain_name . '/resolve', [], self::GET);
    }

    public static function getDomainBids($domain_name)
    {
        return self::request('/dns/' . $domain_name . '/bids', [], self::GET);
    }

    public static function getAllAuctions($tld)
    {
        return self::request('/dns/auctions', ['tld' => $tld], self::GET);
    }
}

