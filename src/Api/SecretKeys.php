<?php

namespace nickurt\PleskXml\Api;

class SecretKeys extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'secret_key' => ['get_info' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->client->request([
            'secret_key' => ['create' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->client->request([
            'secret_key' => ['delete' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'secret_key' => ['get_info' => ['filter' => $params]]
        ]);
    }
}
