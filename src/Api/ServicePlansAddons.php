<?php

namespace nickurt\PleskXml\Api;

class ServicePlansAddons extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'service-plan-addon' => ['get' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'service-plan-addon' => ['get' => ['filter' => $params]]
        ]);
    }
}
