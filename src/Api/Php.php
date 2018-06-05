<?php

namespace nickurt\PleskXml\Api;

class Php extends AbstractApi
{
    /**
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all()
    {
        return $this->post([
            'php-handler' => ['get' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function disable($params)
    {
        return $this->post([
            'php-handler' => ['disable' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function enable($params)
    {
        return $this->post([
            'php-handler' => ['enable' => ['filter' => $params]]
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
            'php-handler' => ['get' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function usage($params)
    {
        return $this->post([
            'php-handler' => ['get-usage' => ['filter' => $params]]
        ]);
    }
}
