<?php

namespace nickurt\PleskXml\Api;

class Subscriptions extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'webspace' => ['get' => ['filter' => [], 'dataset' => ['gen_info' => [], 'hosting' => [], 'subscriptions' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'webspace' => ['get' => ['filter' => $params, 'dataset' => ['gen_info' => [], 'hosting' => [], 'subscriptions' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function hosting($params)
    {
        return $this->client->request([
            'webspace' => ['get-physical-hosting-descriptor' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function limits($params)
    {
        return $this->client->request([
            'webspace' => ['get-limit-descriptor' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function permissions($params)
    {
        return $this->client->request([
            'webspace' => ['get-permission-descriptor' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function traffic($params)
    {
        return $this->client->request([
            'webspace' => ['get_traffic' => ['filter' => $params]]
        ]);
    }
}
