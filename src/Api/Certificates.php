<?php

namespace nickurt\PleskXml\Api;

class Certificates extends Operator
{
    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->client->request([
            'certificate' => ['remove' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function domain($params)
    {
        return $this->client->request([
            'certificate' => ['get-pool' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function generate($params)
    {
        return $this->client->request([
            'certificate' => ['generate' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function install($params)
    {
        return $this->client->request([
            'certificate' => ['install' => $params]
        ]);
    }
}
