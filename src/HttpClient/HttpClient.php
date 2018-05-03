<?php

namespace nickurt\PleskXml\HttpClient;

class HttpClient implements HttpClientInterface
{
    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var array
     */
    protected $headers = [];

    /**
     * HttpClient constructor.
     */
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    /**
     * @param array $body
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function post($body = [])
    {
        return $this->request($body, 'POST');
    }

    /**
     * @param $body
     * @param $method
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request($body, $method)
    {
        $response = $this->client->request(
            $method,
            $this->getOptions()['base_url'],
            [
                'headers' => $this->getHeaders(),
                'body' => $body
            ]
        );

        return json_decode(json_encode(simplexml_load_string($response->getBody())));
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->options = array_merge($this->options, $options);
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers)
    {
        $this->headers = array_merge($this->headers, $headers);
    }
}