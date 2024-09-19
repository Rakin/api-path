<?php

use Rakin\Poeninja\Client;
use Rakin\Poeninja\CurrencyOverview;
use Rakin\Poeninja\Enum\CurrencyType;
use Rakin\Poeninja\Enum\ItemType;
use Rakin\Poeninja\IndexState;
use Rakin\Poeninja\ItemOverview;

test('list IndexState', function () {

    $indexState = new IndexState();

    $response = $indexState->get();

    expect($response->getStatusCode())->toBeBetween(200, 299);
});

test('list currencyoverview', function () {


    foreach (CurrencyType::cases() as $type) {
        $currencyOverview = new CurrencyOverview(
            "Settlers",
            $type
        );
        $response = $currencyOverview->get();

        expect($response->getStatusCode())->toBeBetween(200, 299);
    }
});

test('list itemoverview', function () {


    foreach (ItemType::cases() as $type) {
        $itemOverview = new ItemOverview(
            getleague(),
            $type
        );
        $response = $itemOverview->get();
        expect($response->getStatusCode())->toBeBetween(200, 299);
    }
});
