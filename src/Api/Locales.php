<?php

namespace nickurt\PleskXml\Api;

class Locales extends AbstractApi
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->post([
            'locale' => ['get' => ['filter' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function disable($params)
    {
        return $this->post([
            'locale' => ['disable' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function enable($params)
    {
        return $this->post([
            'locale' => ['enable' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->post([
            'locale' => ['get' => ['filter' => $params]]
        ]);
    }
}
