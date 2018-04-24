<?php

namespace nickurt\PleskXml\Api;

class Sessions extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'session' => ['get' => []]
        ]);
    }

    /**
     * @return mixed
     */
    public function create($params)
    {
        return $this->client->request([
            'server' => ['create_session' => ['login' => $params, 'data' => ['user_ip' => base64_encode(request()->ip()), 'source_server' => '']]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function terminate($params)
    {
        return $this->client->request([
            'session' => ['terminate' => $params]
        ]);
    }
}
