<?php

namespace nickurt\PleskXml\Api;

class Sites extends AbstractApi
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->post([
            'site' => ['get' => ['filter' => [], 'dataset' => ['gen_info' => [], 'hosting' => [], 'stat' => [], 'prefs' => [], 'disk_usage' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->post([
            'site' => ['add' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->post([
            'site' => ['del' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->post([
            'site' => ['get' => ['filter' => $params, 'dataset' => ['gen_info' => [], 'hosting' => [], 'stat' => [], 'prefs' => [], 'disk_usage' => []]]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function traffic($params)
    {
        return $this->post([
            'site' => ['get_traffic' => ['filter' => $params]]
        ]);
    }
}
