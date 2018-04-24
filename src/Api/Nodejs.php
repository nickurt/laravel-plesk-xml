<?php

namespace nickurt\PleskXml\Api;

class Nodejs extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'extension' => ['call' => ['nodejs' => ['versions' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function disable($params)
    {
        return $this->client->request([
            'extension' => ['call' => ['nodejs' => ['disable' => $params]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function enable($params)
    {
        return $this->client->request([
            'extension' => ['call' => ['nodejs' => ['enable' => $params]]]
        ]);
    }
}
