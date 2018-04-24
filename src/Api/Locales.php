<?php

namespace nickurt\PleskXml\Api;

class Locales extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'locale' => ['get' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'locale' => ['get' => ['filter' => $params]]
        ]);
    }
}
