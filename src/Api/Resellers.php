<?php

namespace nickurt\PleskXml\Api;

class Resellers extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'reseller' => ['get' => ['filter' => [], 'dataset' => ['gen-info' => [], 'stat' => [], 'permissions' => [], 'limits' => [], 'ippool' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->client->request([
            'reseller' => ['add' => ['gen-info' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->client->request([
            'reseller' => ['del' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function domains($params)
    {
        return $this->client->request([
            'reseller' => ['get-domain-list' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'reseller' => ['get' => ['filter' => $params, 'dataset' => ['gen-info' => [], 'stat' => [], 'permissions' => [], 'limits' => [], 'ippool' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function limits($params)
    {
        return $this->client->request([
            'reseller' => ['get-limit-descriptor' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function permissions($params)
    {
        return $this->client->request([
            'reseller' => ['get-permission-descriptor' => ['filter' => $params]]
        ]);
    }
}
