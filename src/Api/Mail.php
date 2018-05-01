<?php

namespace nickurt\PleskXml\Api;

class Mail extends Operator
{
    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->client->request([
            'mail' => ['create' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function delete($params)
    {
        return $this->client->request([
            'mail' => ['remove' => ['filter' => $params]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function disable($params)
    {
        return $this->client->request([
            'mail' => ['disable' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function enable($params)
    {
        return $this->client->request([
            'mail' => ['enable' => $params]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'mail' => ['get_info' => ['filter' => $params, 'mailbox' => [], 'mailbox-usage' => [], 'forwarding' => [], 'aliases' => [], 'autoresponder' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function prefs($params)
    {
        return $this->client->request([
            'mail' => ['get_prefs' => ['filter' => $params]]
        ]);
    }
}
