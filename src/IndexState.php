<?php

namespace Rakin\Poeninja;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use Rakin\Poeninja\Client as PoeninjaClient;
use Rakin\Poeninja\Contracts\ApiRequest;

class IndexState implements ApiRequest
{
    public function __construct(
        private Client|null $client = null
    ) {
        if ($this->client === null) {
            $this->client = PoeninjaClient::get();
        }
    }

    public function get(): ResponseInterface
    {
        return $this->client->get('/api/data/getindexstate');
    }
}
