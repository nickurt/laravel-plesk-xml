<?php

namespace nickurt\PleskXml\Api;

class Operator
{
    public $client;

    public function __construct($client)
    {
        $this->client = $client;
    }
}