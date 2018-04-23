<?php

namespace nickurt\PleskXml\Api;

class Sessions extends Operator
{
    /**
     * @return mixed
     */
    public function create($params)
    {
        return $this->client->request([
            'server' => ['create_session' => ['login' => $params, 'data' => ['user_ip' => base64_encode(request()->ip()), 'source_server' => '']]]
        ]);
    }
}
