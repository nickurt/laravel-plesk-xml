<?php

namespace nickurt\PleskXml\Api;

class Git extends AbstractApi
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->post([
            'extension' => ['call' => ['git' => ['get' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->post([
            'extension' => ['call' => ['git' => ['create' => $params]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->post([
            'extension' => ['call' => ['git' => ['remove' => $params]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function deploy($params)
    {
        return $this->post([
            'extension' => ['call' => ['git' => ['deploy' => $params]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function fetch($params)
    {
        return $this->post([
            'extension' => ['call' => ['git' => ['fetch' => $params]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function update($params)
    {
        return $this->post([
            'extension' => ['call' => ['git' => ['update' => $params]]]
        ]);
    }
}
