<?php

namespace nickurt\PleskXml\Api;

class LogRotations extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'log-rotation' => ['get' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function disable($params)
    {
        return $this->client->request([
            'log-rotation' => ['disable' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function enable($params)
    {
        return $this->client->request([
            'log-rotation' => ['enable' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'log-rotation' => ['get' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function status($params)
    {
        return $this->client->request([
            'log-rotation' => ['get-status' => ['filter' => $params]]
        ]);
    }
}
