<?php

namespace App\Helper;

use \GuzzleHttp\Client;

class Helper
{

    public static function GetApi($url)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get($url);
        $response = $request->getBody();
        return $response;
    }


    public static function PostApi($url,$body)
    {
        $client = new Client();
        $response = $client->createRequest("POST", $url, ['body'=>$body]);
        $response = $client->send($response);
        return $response;
    }
}
