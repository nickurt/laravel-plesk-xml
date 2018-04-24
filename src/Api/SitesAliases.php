<?php

namespace nickurt\PleskXml\Api;

class SitesAliases extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'site-alias' => ['get' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'site-alias' => ['get' => ['filter' => $params]]
        ]);
    }
}
