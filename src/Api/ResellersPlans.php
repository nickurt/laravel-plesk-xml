<?php

namespace nickurt\PleskXml\Api;

class ResellersPlans extends AbstractApi
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->post([
            'reseller-plan' => ['get' => ['filter' => ['all' => []], 'limits' => [], 'permissions' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->post([
            'reseller-plan' => ['add' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->post([
            'reseller-plan' => ['del' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->post([
            'reseller-plan' => ['get' => ['filter' => $params, 'limits' => [], 'permissions' => []]]
        ]);
    }
}
