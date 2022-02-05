<?php

namespace Nblkmal\IpGeo\Classes;

use Illuminate\Support\Facades\Http;

class IpGeo
{
    public function getIP()
    {
        $data = Http::get('https://api.ipify.org/?format=json');
        $response = $data->object();
        $ip = $response->ip;

        return $ip;
    }

    public function getGeolocation($ip)
    {
        $data = Http::get('https://ipinfo.io/'.$ip.'/geo');
        $response = $data->object();
        dd($response);
    }
}