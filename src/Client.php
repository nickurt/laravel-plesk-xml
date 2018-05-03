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
        switch ($name) {
            case 'aps':
                $api = new \nickurt\PleskXml\Api\Aps($this);
                break;
            case 'certificates':
                $api = new \nickurt\PleskXml\Api\Certificates($this);
                break;
            case 'customers':
                $api = new \nickurt\PleskXml\Api\Customers($this);
                break;
            case 'databases':
                $api = new \nickurt\PleskXml\Api\Databases($this);
                break;
            case 'databasesservers':
                $api = new \nickurt\PleskXml\Api\DatabasesServers($this);
                break;
            case 'dns':
                $api = new \nickurt\PleskXml\Api\Dns($this);
                break;
            case 'extensions':
                $api = new \nickurt\PleskXml\Api\Extensions($this);
                break;
            case 'git':
                $api = new \nickurt\PleskXml\Api\Git($this);
                break;
            case 'ip':
                $api = new \nickurt\PleskXml\Api\Ip($this);
                break;
            case 'locales':
                $api = new \nickurt\PleskXml\Api\Locales($this);
                break;
            case 'logrotations':
                $api = new \nickurt\PleskXml\Api\LogRotations($this);
                break;
            case 'mail':
                $api = new \nickurt\PleskXml\Api\Mail($this);
                break;
            case 'nodejs':
                $api = new \nickurt\PleskXml\Api\Nodejs($this);
                break;
            case 'php':
                $api = new \nickurt\PleskXml\Api\Php($this);
                break;
            case 'plesk':
                $api = new \nickurt\PleskXml\Api\Plesk($this);
                break;
            case 'resellers':
                $api = new \nickurt\PleskXml\Api\Resellers($this);
                break;
            case 'resellersplans':
                $api = new \nickurt\PleskXml\Api\ResellersPlans($this);
                break;
            case 'secretkeys':
                $api = new \nickurt\PleskXml\Api\SecretKeys($this);
                break;
            case 'serviceplans':
                $api = new \nickurt\PleskXml\Api\ServicePlans($this);
                break;
            case 'serviceplansaddons':
                $api = new \nickurt\PleskXml\Api\ServicePlansAddons($this);
                break;
            case 'sessions':
                $api = new \nickurt\PleskXml\Api\Sessions($this);
                break;
            case 'sites':
                $api = new \nickurt\PleskXml\Api\Sites($this);
                break;
            case 'sitesaliases':
                $api = new \nickurt\PleskXml\Api\SitesAliases($this);
                break;
            case 'subdomains':
                $api = new \nickurt\PleskXml\Api\Subdomains($this);
                break;
            case 'subscriptions':
                $api = new \nickurt\PleskXml\Api\Subscriptions($this);
                break;
            default:
                throw new \InvalidArgumentException(sprintf('Undefined method called:"%s"', $name));
                break;
        }

        return $api;
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