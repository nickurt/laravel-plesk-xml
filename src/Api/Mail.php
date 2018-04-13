<?php

namespace nickurt\PleskXml\Api;

class Mail extends Operator
{
    /**
     * @return mixed
     */
    public function get($params)
    {
        return $this->client->request([
            'mail' => ['get_info' => ['filter' => $params, 'mailbox' => []]]
        ]);
    }

    /**
     * @param $params
     * @return mixed
     */
    public function getPrefs($params)
    {
        return $this->client->request([
            'mail' => ['get_prefs' => ['filter' => $params]]
        ]);
    }
}
