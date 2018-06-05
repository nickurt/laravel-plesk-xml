<?php

namespace nickurt\PleskXml\Api;

class SitesAliases extends AbstractApi
{
    /**
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all()
    {
        return $this->post([
            'site-alias' => ['get' => ['filter' => []]]
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
            'site-alias' => ['create' => $params]
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
            'site-alias' => ['delete' => ['filter' => $params]]
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
            'site-alias' => ['get' => ['filter' => $params]]
        ]);
    }
}
