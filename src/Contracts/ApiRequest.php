<?php

namespace Rakin\Poeninja\Contracts;

use Psr\Http\Message\ResponseInterface;

interface ApiRequest
{
    public function get(): ResponseInterface;
}
