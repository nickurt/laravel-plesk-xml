<?php

namespace nickurt\PleskXml\Api;

class Subdomains extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'subdomain' => ['get' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->client->request([
            'subdomain' => ['add' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->client->request([
            'subdomain' => ['del' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'subdomain' => ['get' => ['filter' => $params]]
        ]);
    }
}
