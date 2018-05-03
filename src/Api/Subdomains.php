<?php

namespace nickurt\PleskXml\Api;

class Subdomains extends AbstractApi
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->post([
            'subdomain' => ['get' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->post([
            'subdomain' => ['add' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->post([
            'subdomain' => ['del' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->post([
            'subdomain' => ['get' => ['filter' => $params]]
        ]);
    }
}
