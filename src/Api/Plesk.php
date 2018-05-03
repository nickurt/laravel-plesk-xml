<?php

namespace nickurt\PleskXml\Api;

class Plesk extends AbstractApi
{
    /**
     * @return mixed
     */
    public function additional_key()
    {
        return $this->post([
            'server' => ['get_additional_key' => []]
        ]);
    }

    /**
     * @return mixed
     */
    public function information()
    {
        return $this->post([
            'server' => ['get' => ['admin' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function install_key($params)
    {
        return $this->post([
            'server' => ['lic_install' => $params]
        ]);
    }

    /**
     * @return mixed
     */
    public function key()
    {
        return $this->post([
            'server' => ['get' => ['key' => []]]
        ]);
    }

    /**
     * @return mixed
     */
    public function rollback_key()
    {
        return $this->post([
            'server' => ['license-rollback-key' => []]
        ]);
    }

    /**
     * @return mixed
     */
    public function services()
    {
        return $this->post([
            'server' => ['get' => ['services_state' => []]]
        ]);
    }
}
