<?php

namespace nickurt\PleskXml\Api;

class Extensions extends AbstractApi
{
    /**
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all()
    {
        return $this->post([
            'extension' => ['get' => []]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function get($params)
    {
        return $this->post([
            'extension' => ['call' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function install($params)
    {
        return $this->post([
            'extension' => ['install' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function uninstall($params)
    {
        return $this->post([
            'extension' => ['uninstall' => $params]
        ]);
    }
}
