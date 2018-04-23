<?php

namespace nickurt\PleskXml\Api;

class Dns extends Operator
{
    /**
     * @return mixed
     */
    public function getRec($params)
    {
        return $this->client->request([
            'dns' => ['get_rec' => ['filter' => $params]]
        ]);
    }
}
