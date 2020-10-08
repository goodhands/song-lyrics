<?php

namespace Goodhands\SongLyrics\Tests;

use Orchestra\Testbench\TestCase;
use Goodhands\SongLyrics\SongLyricsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [SongLyricsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
