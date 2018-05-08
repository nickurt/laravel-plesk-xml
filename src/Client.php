<?php

namespace nickurt\PleskXml;

use nickurt\PleskXml\HttpClient\HttpClient;

class Client implements ClientInterface
{
    /**
     * @var
     */
    protected $client;

    /**
     * @var array
     */
    private $options = [
        'api_port' => '8443',
        'api_version' => '1.6.9.1',
    ];

    /**
     * @var array
     */
    private $classes = [
        'aps' => 'Aps',
        'certificates' => 'Certificates',
        'customers' => 'Customers',
        'databases' => 'Databases',
        'databasesservers' => 'DatabasesServers',
        'dns' => 'Dns',
        'extensions' => 'Extensions',
        'git' => 'Git',
        'ip' => 'Ip',
        'locales' => 'Locales',
        'logrotations' => 'LogRotations',
        'mail' => 'Mail',
        'nodejs' => 'Nodejs',
        'php' => 'Php',
        'plesk' => 'Plesk',
        'resellers' => 'Resellers',
        'resellersplans' => 'ResellersPlans',
        'secretkeys' => 'SecretKeys',
        'serviceplans' => 'ServicePlans',
        'serviceplansaddons' => 'ServicePlansAddons',
        'sessions' => 'Sessions',
        'sites' => 'Sites',
        'sitesaliases' => 'SitesAliases',
        'subdomains' => 'Subdomains',
        'subscriptions' => 'Subscriptions',
    ];

    /**
     * @param $method
     * @param $args
     * @return Api\Aps|Api\Certificates
     */
    public function __call($method, $args)
    {
        try {
            return $this->api($method);
        } catch (InvalidArgumentException $e) {
            throw new \BadMethodCallException(sprintf('Undefined method called:"%s"', $method));
        }
    }

    /**
     * @param $name
     * @return Api\Aps|Api\Certificates|Api\Customers|Api\Databases|Api\DatabasesServers|Api\Dns|Api\Extensions
     */
    public function api($name)
    {
        if(!isset($this->classes[$name])) {
            throw new \InvalidArgumentException(sprintf('Undefined method called:"%s"', $name));
        }

        $class = '\\nickurt\PleskXml\\Api\\' . $this->classes[$name];

        return new $class($this);
    }

    /**
     * @param $username
     * @param $password
     */
    public function setCredentials($username, $password)
    {
        $this->getHttpClient()->setHeaders([
            'HTTP_AUTH_LOGIN' => $username,
            'HTTP_AUTH_PASSWD' => $password,
        ]);
    }

    /**
     * @return HttpClient
     */
    public function getHttpClient()
    {
        if (!isset($this->client)) {
            $this->client = new HttpClient();
            $this->client->setOptions($this->options);
        }

        return $this->client;
    }

    /**
     * @param $host
     */
    public function setHost($host)
    {
        $this->getHttpClient()->setOptions([
            'base_url' => sprintf('https://%s:8443/enterprise/control/agent.php', $host)
        ]);
    }
}