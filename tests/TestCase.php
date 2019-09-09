<?php

namespace nickurt\PleskXml\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    /**
     * Define environment setup.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        config()->set('plesk-xml', [
            'default' => 'default',
            'servers' => [
                'default' => [
                    'host' => 'plesk-xml.tld',
                    'username' => 'plesk-xml',
                    'password' => 'xml-plesk',
                ],
                'custom' => [
                    'host' => 'xml-plesk-xml.tld',
                    'port' => 8444,
                    'username' => 'xml-plesk-xml',
                    'password' => 'plesk-xml-plesk',
                ]
            ],
        ]);
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'PleskXml' => \nickurt\PleskXml\Facade::class
        ];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \nickurt\PleskXml\ServiceProvider::class
        ];
    }
}
