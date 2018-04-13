<?php

namespace nickurt\PleskXml\Api;

class Databases extends Operator
{
    /**
     * @return mixed
     */
    public function all($params)
    {
        return $this->client->request([
            'database' => ['get-db' => ['filter' => $params]]
        ]);
    }
}
