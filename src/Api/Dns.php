<?php

namespace nickurt\PleskXml\Api;

class Dns extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all($params)
    {
        return $this->post([
            'dns' => ['get_rec' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function create($params)
    {
        return $this->post([
            'dns' => ['add_rec' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function delete($params)
    {
        return $this->post([
            'dns' => ['del_rec' => ['filter' => $params]]
        ]);
    }
}
