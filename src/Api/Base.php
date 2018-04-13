<?php

namespace nickurt\PleskXml\Api;

use \Spatie\ArrayToXml\ArrayToXml;

class Base
{
    /**
     * @var
     */
    protected $host;

    /**
     * @var string
     */
    protected $port = '8443';

    /**
     * @var string
     */
    protected $version = '1.6.9.0';

    /**
     * @var
     */
    protected $username;

    /**
     * @var
     */
    protected $password;

    /**
     * @return Customers
     */
    public function customers()
    {
        return new \nickurt\PleskXml\Api\Customers($this);
    }

    /**
     * @return Database
     */
    public function databases()
    {
        return new \nickurt\PleskXml\Api\Databases($this);
    }

    /**
     * @return Mail
     */
    public function mail()
    {
        return new \nickurt\PleskXml\Api\Mail($this);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request($params)
    {
        $response = (new \GuzzleHttp\Client())
            ->request('POST', $this->getApiUrl(), [
                'headers' => [
                    'HTTP_AUTH_LOGIN' => $this->username,
                    'HTTP_AUTH_PASSWD' => $this->password,
                ],
                'body' => ArrayToXml::convert($params, [
                    'rootElementName' => 'packet',
                    '_attributes' => [
                        'version' => $this->getApiVersion(),
                    ],
                ])
            ]);

        return json_decode(json_encode(simplexml_load_string($response->getBody())), true);
    }

    /**
     * @return string
     */
    public function getApiUrl()
    {
        return sprintf('https://%s:%d/enterprise/control/agent.php', $this->host, $this->port);
    }

    /**
     * @return string
     */
    public function getApiVersion()
    {
        return $this->version;
    }

    /**
     * @param $username
     * @param $password
     */
    public function setCredentials($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @param $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return Sites
     */
    public function sites()
    {
        return new \nickurt\PleskXml\Api\Sites($this);
    }

    /**
     * @return Subscriptions
     */
    public function subscriptions()
    {
        return new \nickurt\PleskXml\Api\Subscriptions($this);
    }
}
