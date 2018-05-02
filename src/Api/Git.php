<?php

namespace nickurt\PleskXml\Api;

class Git extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'extension' => ['call' => ['git' => ['get' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->client->request([
            'extension' => ['call' => ['git' => ['create' => $params]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->client->request([
            'extension' => ['call' => ['git' => ['remove' => $params]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deploy($params)
    {
        return $this->client->request([
            'extension' => ['call' => ['git' => ['deploy' => $params]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function fetch($params)
    {
        return $this->client->request([
            'extension' => ['call' => ['git' => ['fetch' => $params]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function update($params)
    {
        return $this->client->request([
            'extension' => ['call' => ['git' => ['update' => $params]]]
        ]);
    }
}
