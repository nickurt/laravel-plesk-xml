<?php

namespace nickurt\PleskXml\Api;

class Ftp extends AbstractApi
{
    /**
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all()
    {
        return $this->post([
            'ftp-user' => ['get' => ['filter' => []]]
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
            'ftp-user' => ['add' => $params]
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
            'ftp-user' => ['del' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function get($params)
    {
        return $this->post([
            'ftp-user' => ['get' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function update($params)
    {
        return $this->post([
            'ftp-user' => ['set' => $params]
        ]);
    }
}
