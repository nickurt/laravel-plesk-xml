<?php

namespace nickurt\PleskXml\Api;

class Extensions extends AbstractApi
{
    /**
     * @return mixed
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
     */
    public function uninstall($params)
    {
        return $this->post([
            'extension' => ['uninstall' => $params]
        ]);
    }
}
