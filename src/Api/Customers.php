<?php

namespace nickurt\PleskXml\Api;

class Customers extends AbstractApi
{
    /**
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all()
    {
        return $this->post([
            'customer' => ['get' => ['filter' => [], 'dataset' => ['gen_info' => [], 'stat' => []]]]
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
            'customer' => ['add' => ['gen_info' => $params]]
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
            'customer' => ['del' => ['filter' => $params]]
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
            'customer' => ['get' => ['filter' => $params, 'dataset' => ['gen_info' => [], 'stat' => []]]]
        ]);
    }
}
