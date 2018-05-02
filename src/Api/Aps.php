<?php

namespace nickurt\PleskXml\Api;

class Aps extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'aps' => ['get-packages-list' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function download($params)
    {
        return $this->client->request([
            'aps' => ['download-package' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function import_config($params)
    {
        return $this->client->request([
            'aps' => ['import-config' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function import_package($params)
    {
        return $this->client->request([
            'aps' => ['import-package' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function install($params)
    {
        return $this->client->request([
            'aps' => ['install' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function task($params)
    {
        return $this->client->request([
            'aps' => ['get-download-status' => ['filter' => $params]]
        ]);
    }
}
