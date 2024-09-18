<?php

test('list leagues actives', function () {
    $fakeClient = getResponseClient();

    $leaguesClass = new Leagues($fakeClient);;

    $leagues = $leaguesClass->get();
    expect(count($leagues))->toBeGreaterThanOrEqualTo(1);
});
