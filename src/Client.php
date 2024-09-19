<?php

namespace Rakin\Poeninja;

use GuzzleHttp\Client as GuzzleClient;
use Pest\Support\Arr;

class Client
{
    const BASE_URI =  "https://poe.ninja/api";

    static public function get(): GuzzleClient
    {
        return new GuzzleClient([
            'base_uri' => self::BASE_URI,
            /*   'headers' => [
                'Content-Type' =>  'application/json',
                'Accept'     => 'application/json',

            ] */
        ]);
    }
}
