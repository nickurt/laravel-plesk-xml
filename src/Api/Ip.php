<?php

namespace nickurt\PleskXml\Api;

class Ip extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'ip' => ['get' => []]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->client->request([
            'ip' => ['add' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->client->request([
            'ip' => ['del' => ['filter' => $params]]
        ]);
    }
}
