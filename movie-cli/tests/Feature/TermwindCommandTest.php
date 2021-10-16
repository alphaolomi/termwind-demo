<?php

test('termwind command', function () {
    $html = $this->artisan('termwind')->assertExitCode(0);

    $this->assertCommandCalled('termwind');
});
