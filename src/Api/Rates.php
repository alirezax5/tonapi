<?php

namespace alirezax5\Tonapi\Api;
trait Rates
{
    public static function getRates($tokens,$currencies = 'ton,usd')
    {
        return self::request('/rates', ['tokens'=>$tokens,'currencies'=>$currencies], self::GET);
    }
    public static function getChartRates($token,$currency = 'usd', $start_date = null, $end_date = null,$points_count = 200)
    {
        return self::request('/rates/chart', ['token'=>$token,'currency'=>$currency,'start_date' => $start_date, 'end_date' => $end_date, 'points_count' => $points_count], self::GET);
    }
    public static function getMarketsRates()
    {
        return self::request('/rates/markets', [], self::GET);
    }
}

