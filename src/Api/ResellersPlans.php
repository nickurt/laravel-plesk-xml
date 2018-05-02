<?php

namespace nickurt\PleskXml\Api;

class ResellersPlans extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'reseller-plan' => ['get' => ['filter' => ['all' => []], 'limits' => [], 'permissions' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->client->request([
            'reseller-plan' => ['add' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->client->request([
            'reseller-plan' => ['del' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'reseller-plan' => ['get' => ['filter' => $params, 'limits' => [], 'permissions' => []]]
        ]);
    }
}
