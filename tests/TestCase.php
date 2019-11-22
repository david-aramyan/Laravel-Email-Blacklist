<?php
namespace Davaramyan\Blacklist\Test;

use Davaramyan\Blacklist\BlacklistServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return \Davaramyan\Blacklist\BlacklistServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [BlacklistServiceProvider::class];
    }
}
