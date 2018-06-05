<?php

namespace nickurt\PleskXml\Api;

class Subscriptions extends AbstractApi
{
    /**
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function all()
    {
        return $this->post([
            'webspace' => ['get' => ['filter' => [], 'dataset' => ['gen_info' => [], 'hosting' => [], 'subscriptions' => []]]]
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
            'webspace' => ['add' => $params]
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
            'webspace' => ['del' => ['filter' => $params]]
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
            'webspace' => ['get' => ['filter' => $params, 'dataset' => ['aps-filter' => [], 'disk_usage' => [], 'gen_info' => [], 'hosting' => [], 'limits' => [], 'mail' => [], 'packages' => [], 'performance' => [], 'permissions' => [], 'php-settings' => [], 'plan-items' => [], 'prefs' => [], 'resource-usage' => [], 'stat' => [], 'subscriptions' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function hosting($params)
    {
        return $this->post([
            'webspace' => ['get-physical-hosting-descriptor' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function limits($params)
    {
        return $this->post([
            'webspace' => ['get-limit-descriptor' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function permissions($params)
    {
        return $this->post([
            'webspace' => ['get-permission-descriptor' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function traffic($params)
    {
        return $this->post([
            'webspace' => ['get_traffic' => ['filter' => $params]]
        ]);
    }
}
