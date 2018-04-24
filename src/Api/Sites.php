<?php

namespace nickurt\PleskXml\Api;

class Sites extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'site' => ['get' => ['filter' => [], 'dataset' => ['gen_info' => [], 'hosting' => [], 'stat' => [], 'prefs' => [], 'disk_usage' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'site' => ['get' => ['filter' => $params, 'dataset' => ['gen_info' => [], 'hosting' => [], 'stat' => [], 'prefs' => [], 'disk_usage' => []]]]
        ]);
    }
}
