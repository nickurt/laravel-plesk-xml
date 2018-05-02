<?php

namespace nickurt\PleskXml\Api;

class Extensions extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'extension' => ['get' => []]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'extension' => ['call' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function install($params)
    {
        return $this->client->request([
            'extension' => ['install' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function uninstall($params)
    {
        return $this->client->request([
            'extension' => ['uninstall' => $params]
        ]);
    }
}
