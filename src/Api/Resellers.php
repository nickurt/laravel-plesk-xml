<?php

namespace nickurt\PleskXml\Api;

class Resellers extends AbstractApi
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->post([
            'reseller' => ['get' => ['filter' => [], 'dataset' => ['gen-info' => [], 'stat' => [], 'permissions' => [], 'limits' => [], 'ippool' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->post([
            'reseller' => ['add' => ['gen-info' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->post([
            'reseller' => ['del' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function domains($params)
    {
        return $this->post([
            'reseller' => ['get-domain-list' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->post([
            'reseller' => ['get' => ['filter' => $params, 'dataset' => ['gen-info' => [], 'stat' => [], 'permissions' => [], 'limits' => [], 'ippool' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function limits($params)
    {
        return $this->post([
            'reseller' => ['get-limit-descriptor' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function permissions($params)
    {
        return $this->post([
            'reseller' => ['get-permission-descriptor' => ['filter' => $params]]
        ]);
    }
}
