<?php

namespace Wotta\IlluminateExtender\Tests\Unit\Console\Extended;

use Illuminate\Support\Facades\Artisan;
use Wotta\IlluminateExtender\Tests\TestCase;

class RouteListCommandTest extends TestCase
{
    /** @test */
    public function route_list_command_has_action_option(): void
    {
        $this->artisan('route:list', ['--action' => 'TestController'])
            ->assertExitCode(0);

        $this->artisan('route:list', ['--action' => 'wrongAction'])
            ->assertExitCode(0);
    }

    /** @test */
    public function route_list_command_has_open_option(): void
    {
        $this->markTestSkipped('Cannot really run this test while getting a early exit code.');

        Artisan::call('route:list', ['--open' => null]);
    }
}
