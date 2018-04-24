<?php

namespace nickurt\PleskXml\Api;

class Plesk extends Operator
{
    /**
     * @return mixed
     */
    public function information()
    {
        return $this->client->request([
            'server' => ['get' => ['admin' => []]]
        ]);
    }
}
