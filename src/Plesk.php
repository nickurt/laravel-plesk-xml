<?php

namespace nickurt\PleskXml;

use Illuminate\Foundation\Application;

class Plesk
{
    /** @var \Illuminate\Foundation\Application */
    protected $app;

    /** @var \nickurt\PleskXml\Client */
    protected $client;

    /** @var array */
    protected $servers = [];

    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param $method
     * @param $args
     * @return mixed
     */
    public function __call($method, $args)
    {
        return call_user_func_array([$this->client, $method], $args);
    }

    /**
     * @param string|null $name
     * @return \nickurt\PleskXml\Client
     */
    public function server($name = null)
    {
        $name = $name ?: $this->getDefaultServer();

        return $this->servers[$name] = $this->get($name);
    }

    /**
     * @return string
     */
    public function getDefaultServer()
    {
        return $this->app['config']['plesk-xml.default'];
    }

    /**
     * @param string $name
     * @return \nickurt\PleskXml\Client
     */
    protected function get($name)
    {
        return $this->servers[$name] ?? $this->resolve($name);
    }

    /**
     * @param string $name
     * @return \nickurt\PleskXml\Client
     */
    protected function resolve($name)
    {
        $config = $this->getConfig($name);

        $this->client = new \nickurt\PleskXml\Client();
        $this->client->setHost($config['host']);
        $this->client->setPort($config['port'] ?? 8443);

        if (isset($config['key']) && strlen($config['key']) > 0) {
            $this->client->setSecretKey($config['key']);
        } else {
            $this->client->setCredentials(
                $config['username'],
                $config['password']
            );
        }

        return $this->client;
    }

    /**
     * @param string $name
     * @return array
     */
    protected function getConfig($name)
    {
        return $this->app['config']["plesk-xml.servers.{$name}"];
    }
}
