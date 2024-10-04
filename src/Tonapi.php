<?php

namespace alirezax5\Tonapi;

use alirezax5\Tonapi\Api\{Accounts, Jettons, Nft, Dns, Wallet, Rates,Staking,Traces,Events,Storage,Blockchain,Utilities};

class Tonapi
{
    use Accounts, Nft, Jettons, Dns, Wallet, Rates,Staking,Traces,Events,Storage,Blockchain,Utilities;

    public static $url = 'https://tonapi.io/v2';
    const DELETE = 'DELETE';
    const GET = 'GET';
    const PUT = 'PUT';
    const POST = 'POST';
    private static $headers = [];

    protected static function request($path, $body = [], $httpMetHod = 'GET')
    {
        $data = $httpMetHod == 'POST' || $httpMetHod == 'PUT' ? json_encode($body) : http_build_query($body);

        $header = array_merge(['Accept: application/json'], self::getHeaders());
        $url = self::getUrl($path) . ($data ? '?' . $data : '');
        $ch = curl_init();
        $options = [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_CUSTOMREQUEST => $httpMetHod,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13',
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_HTTPHEADER => $header
        ];

        curl_setopt_array($ch, $options);
        $res = curl_exec($ch);
        return json_decode($res);
    }

    public static function setHeaders($headers)
    {
        self::$headers = $headers;
    }

    public static function getHeaders()
    {
        return self::$headers;
    }

    private static function getUrl($path)
    {
        return self::$url . $path;
    }
}