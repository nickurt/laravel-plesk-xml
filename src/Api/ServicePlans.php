<?php

namespace nickurt\PleskXml\Api;

class ServicePlans extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'service-plan' => ['get' => ['filter' => [], 'owner-all' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->client->request([
            'service-plan' => ['add' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->client->request([
            'service-plan' => ['del' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'service-plan' => ['get' => ['filter' => $params, 'owner-all' => []]]
        ]);
    }
}
