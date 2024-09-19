<?php

namespace Rakin\Poeninja;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use Rakin\Poeninja\Client as PoeninjaClient;
use Rakin\Poeninja\Enum\ItemType;

class ItemOverview
{
    public function __construct(
        private string $league,
        private ItemType $type,
        private Client|null $client = null,
    ) {
        if ($this->client === null) {
            $this->client = PoeninjaClient::get();
        }
    }

    public function get(): ResponseInterface
    {

        return $this->client->get('/api/data/itemoverview', [
            'query' => [
                'type'  => $this->type->name,
                'league' => $this->league
            ]
        ]);
    }
}
