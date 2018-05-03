<?php

namespace nickurt\PleskXml\Api;

class ServicePlansAddons extends AbstractApi
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->post([
            'service-plan-addon' => ['get' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->post([
            'service-plan-addon' => ['get' => ['filter' => $params]]
        ]);
    }
}
