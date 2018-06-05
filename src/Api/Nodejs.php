<?php

namespace nickurt\PleskXml\Api;

class Nodejs extends AbstractApi
{
    /**
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all()
    {
        return $this->post([
            'extension' => ['call' => ['nodejs' => ['versions' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function disable($params)
    {
        return $this->post([
            'extension' => ['call' => ['nodejs' => ['disable' => $params]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function enable($params)
    {
        return $this->post([
            'extension' => ['call' => ['nodejs' => ['enable' => $params]]]
        ]);
    }
}
