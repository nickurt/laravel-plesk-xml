<?php

namespace nickurt\PleskXml\Api;

class Certificates extends AbstractApi
{
    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function delete($params)
    {
        return $this->post([
            'certificate' => ['remove' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function domain($params)
    {
        return $this->post([
            'certificate' => ['get-pool' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function generate($params)
    {
        return $this->post([
            'certificate' => ['generate' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function install($params)
    {
        return $this->post([
            'certificate' => ['install' => $params]
        ]);
    }
}
