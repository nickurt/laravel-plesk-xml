<?php

namespace nickurt\PleskXml\Api;

class Databases extends AbstractApi
{
    /**
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all()
    {
        return $this->post([
            'database' => ['get-db' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function create($params)
    {
        return $this->post([
            'database' => ['add-db' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function delete($params)
    {
        return $this->post([
            'database' => ['del-db' => ['filter' => $params]]
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
            'database' => ['get-db' => ['filter' => $params]]
        ]);
    }

    /**
     * @param array $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function users($params = [])
    {
        return $this->post([
            'database' => ['get-db-users' => ['filter' => $params]]
        ]);
    }
}
