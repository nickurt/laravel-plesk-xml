<?php

namespace nickurt\PleskXml\Api;

class Sites extends Operator
{
    /**
     * @return mixed
     */
    public function all($params = [])
    {
        return $this->client->request([
            'webspace' => ['get' => ['filter' => $params, 'dataset' => ['gen_info' => [], 'hosting' => []]]]
        ]);
    }
}
