<?php

namespace nickurt\PleskXml\Api;

class Dns extends Operator
{
    /**
     * @param $params
     * @return mixed
     */
    public function all($params)
    {
        return $this->client->request([
            'dns' => ['get_rec' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->client->request([
            'dns' => ['add_rec' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->client->request([
            'dns' => ['del_rec' => ['filter' => $params]]
        ]);
    }
}
