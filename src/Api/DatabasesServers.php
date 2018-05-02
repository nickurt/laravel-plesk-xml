<?php

namespace nickurt\PleskXml\Api;

class DatabasesServers extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'db_server' => ['get' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->client->request([
            'db_server' => ['add' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->client->request([
            'db_server' => ['del' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'db_server' => ['get' => ['filter' => $params]]
        ]);
    }

    /**
     * @return mixed
     */
    public function types()
    {
        return $this->client->request([
            'db_server' => ['get-supported-types' => []]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function local($params)
    {
        return $this->client->request([
            'db_server' => ['get-local' => ['filter' => $params]]
        ]);
    }
}
