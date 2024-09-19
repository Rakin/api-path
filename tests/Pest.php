<?php

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "pest()" function to bind a different classes or traits.
|
*/

// pest()->extend(Tests\TestCase::class)->in('Feature');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/

function something()
{
    // ..
}

function getReponseGetIndexstate()
{
    $handler = new MockHandler();
    $handler->append(
        new Response(
            status: 200,
            body: file_get_contents('./tests//Data/poeninja.com/getindexstate.json')
        )
    );
    return new Client([
        $handler
    ]);
}

function getReponseGetCurrencyoverview()
{
    $handler = new MockHandler();
    $handler->append(
        new Response(
            status: 200,
            body: file_get_contents('./tests//Data/poeninja.com/currencyoverview.json')
        )
    );
    return new Client([
        $handler
    ]);
}

function getReponseGetItemoverview()
{
    $handler = new MockHandler();
    $handler->append(
        new Response(
            status: 200,
            body: file_get_contents('./tests//Data/poeninja.com/itemoverview.json')
        )
    );
    return new Client([
        $handler
    ]);
}


function getLeague(): String
{
    return "Settlers";
}
