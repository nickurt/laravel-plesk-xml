<?php

namespace nickurt\PleskXml\Api;

class Aps extends AbstractApi
{
    /**
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all()
    {
        return $this->post([
            'aps' => ['get-packages-list' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function download($params)
    {
        return $this->post([
            'aps' => ['download-package' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function import_config($params)
    {
        return $this->post([
            'aps' => ['import-config' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function import_package($params)
    {
        return $this->post([
            'aps' => ['import-package' => $params]
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
            'aps' => ['install' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function task($params)
    {
        return $this->post([
            'aps' => ['get-download-status' => ['filter' => $params]]
        ]);
    }
}
