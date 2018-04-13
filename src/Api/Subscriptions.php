<?php

namespace nickurt\PleskXml\Api;

class Subscriptions extends Operator
{
    /**
     * @return mixed
     */
    public function all()
    {
        return $this->client->request([
            'webspace' => ['get' => ['filter' => [], 'dataset' => ['hosting' => [], 'subscriptions' => []]]]
        ]);
    }
}
