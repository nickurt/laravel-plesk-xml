<?php

namespace nickurt\PleskXml\Api;

class Ip extends AbstractApi
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->post([
            'ip' => ['get' => []]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->post([
            'ip' => ['add' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->post([
            'ip' => ['del' => ['filter' => $params]]
        ]);
    }
}
