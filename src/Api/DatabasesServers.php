<?php

namespace nickurt\PleskXml\Api;

class DatabasesServers extends AbstractApi
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->post([
            'db_server' => ['get' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->post([
            'db_server' => ['add' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->post([
            'db_server' => ['del' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->post([
            'db_server' => ['get' => ['filter' => $params]]
        ]);
    }

    /**
     * @return mixed
     */
    public function types()
    {
        return $this->post([
            'db_server' => ['get-supported-types' => []]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function local($params)
    {
        return $this->post([
            'db_server' => ['get-local' => ['filter' => $params]]
        ]);
    }
}
