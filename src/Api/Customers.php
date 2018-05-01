<?php

namespace nickurt\PleskXml\Api;

class Customers extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'customer' => ['get' => ['filter' => [], 'dataset' => ['gen_info' => [], 'stat' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->client->request([
            'customer' => ['add' => ['gen_info' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->client->request([
            'customer' => ['del' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'customer' => ['get' => ['filter' => $params, 'dataset' => ['gen_info' => [], 'stat' => []]]]
        ]);
    }
}
