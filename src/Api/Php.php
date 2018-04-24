<?php

namespace nickurt\PleskXml\Api;

class Php extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'php-handler' => ['get' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function disable($params)
    {
        return $this->client->request([
            'php-handler' => ['disable' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function enable($params)
    {
        return $this->client->request([
            'php-handler' => ['enable' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'php-handler' => ['get' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function usage($params)
    {
        return $this->client->request([
            'php-handler' => ['get-usage' => ['filter' => $params]]
        ]);
    }
}
